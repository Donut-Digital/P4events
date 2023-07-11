async function setToken()
{
    let token = await fetch('/refresh-token')
    .then((res) => res.json())
    .then((data) => {
        console.log('token reset');
        return data.token;
    })
    .catch((err) => {
        console.log('Could not refresh CSRF token!');
        console.log(err);
    });

    document.querySelector('meta[name="csrf-token"]')?.setAttribute('content', token);
}

setToken();
setInterval(setToken, 600000);
