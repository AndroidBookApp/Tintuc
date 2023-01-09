$(document).ready(function() {
    $('.rep').click(function() {
        var id = this.getAttribute('idform')
        alert(id)
        document.getElementById(id).style.display = 'block'
    })
})