function cargarContenido(e){
    urlAjax = "";
    tabId = e.target.hash;
    console.log(tabId);
    if(tabId == "#yw1_tab_1"){
    	$("#yw1_tab_2").html('');
    	urlAjax = baseAjaxUrl;
    	datos = "isdealer=false";
    } else if(tabId == "#yw1_tab_2"){
    	$("#yw1_tab_1").html('');
    	urlAjax = baseAjaxUrl;
    	datos = "isdealer=true";
    }


    if(urlAjax != '') {
        $.ajax({
            data 	 : datos,
            url      : urlAjax,
            type     : 'POST',
            dataType : 'html',
            cache    : false,
            success  : function(html)
            {
                jQuery(tabId).html(html);
            },
            error:function(){
                    alert('Request failed');
            }
        });
    }

    //load ajax stuff here
}