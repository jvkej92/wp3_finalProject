
function postForm(formValue) {
    var myHeaders = new Headers({
        "X-CSRF-TOKEN": $("input[name='_token']").val()
    });
    let formData = new FormData($('#form'));
    formData.append('name', formValue);
    return fetch('/task', {
        method: 'POST',
        headers: myHeaders,
        credentials: "same-origin",
        body: formData
    });
}