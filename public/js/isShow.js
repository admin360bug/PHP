$("#menulist li").click(function(e){
   var id = $(this.children[0]).attr('id');
   console.log(id);
    if (typeof(Storage) !== "undefined") {
        if(typeof(localStorage.requested) !== "undefined"){
            var arr = JSON.parse(localStorage.requested);
            for(var i=0;i<arr.length;i++){
                if(arr[i]==id){
                    break;
                }
                if(i==arr.length-1){
                    arr.push(id);
                    localStorage.requested = JSON.stringify(arr);
                    break;
                }
            }
        
        }else{
            var arr = [id];
            localStorage.requested = JSON.stringify(arr);
        }
    } 
});




if (typeof(Storage) !== "undefined") {
    if(typeof(localStorage.requested) !== "undefined"){
        var arr = JSON.parse(localStorage.requested);
        for(var i=0;i<arr.length;i++){
            $("#menulist li>div")[arr[i]-1].className="";
        }
    }
}