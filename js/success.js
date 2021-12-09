(function success() {
    let params = (new URL(document.location)).searchParams
    let isSuccess = params.get("success")
    isSuccess && document.querySelector('.dropdown-content').style.backgroundColor == "green";//.style.display == "block"
})()