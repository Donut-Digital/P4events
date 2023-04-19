window.addEventListener("load", function()
{
    const contact_form = document.querySelector("#contact_form")
    const contact_form_success = document.querySelector('#contact_form_success')

    if(contact_form)
    {
        const csrf_token = contact_form.querySelector('input[name=_token]')

        const name = contact_form.querySelector('input[name=name]')
        const email = contact_form.querySelector('input[name=email]')
        const number = contact_form.querySelector('textarea[name=number]')

        contact_form.addEventListener("submit", (event) =>
        {
            console.log('event prevented');
            event.preventDefault();

            let form = event.target
            let data = new FormData(form)

            fetch(form.action,
                {
                    method: form.method,
                    body: data,
                    headers:
                        {
                            'X-CSRF-TOKEN': csrf_token.value,
                            'X-Requested-With':'XMLHttpRequest'
                        }
                })
                .then((response) =>
                {
                    if(response.status == 200)
                    {
                        contact_form_success.classList.toggle('hidden')

                        name.value = '';
                        email.value = '';
                        number.value = '';
                    }

                }).catch((error) =>
            {
                console.log(error)
            });

        });
    }
});