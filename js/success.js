//creates update success confirmation
(function success() {
    let params = (new URL(document.location)).searchParams
    let isSuccess = params.get("success")
    isSuccess && document.querySelector('.success').style.backgroundColor == "green";//.style.display == "block"
})()