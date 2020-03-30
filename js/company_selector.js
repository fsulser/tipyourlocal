$(document).ready(function() {
    var options = {
        valueNames: [ 'name', 'address', 'town']
    };
    
    var userList = new List('users', options);

    $("#company_search").on("keyup", function() {
        var value = this.value.toLowerCase().trim();
        $(".list a").show().filter(function() {
          return $(this).children()[0].children[1].innerText.toLowerCase().trim().indexOf(value) == -1;
        }).hide();
      });
} );