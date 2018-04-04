function CheckAuth() {
    $.ajax( {
    url:'CheckAuthorization',
    success:function(user) {
        $user=user.name +' '+user.surname;
        $userid=user.id;
    },
    error:function(user){
//      
window.location.href='/logout';
        

    }
})
}
$(window).on('load', function() {
 
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

CheckAuth();
setInterval(CheckAuth, 100000);
});