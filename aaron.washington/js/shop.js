

const showResults = d => {
    // If there is some data "d", then we make the template with it, but if not, show text "No results"
    $(".shop-list").html(
        d.error?d.error:
        d.result.length?listItemTemplate(d.result):'Sorry, no awesome results'
        );
}

query({type:'everything'}).then(showResults);

$(()=>{
    // e is the event data
    $("#shop-search").on("submit",function(e){
        // prevent the form from submitting
        e.preventDefault();
        let search = $(this).find("input").val();
        query({type:'product_search',search:search}).then(showResults);
    })

    /*$("[data-filter]").on("click",function(e){
        let column = $(this).data("filter");
        let value = $(this).data("value");
        query(
            value==""? {type:'everything'} :
            {type:'product_filter',column:column,value:value}
        ).then(showResults);
    })*/

    $(".js-filter").on("change",function(e){
        /*(
            this.value==0 ? query({type:'everything'}) :
            this.value==1 ? query({type:'product_filter_category',column:'men'}) :
            this.value==2 ? query({type:'product_filter_category',column:'women'}) :
            this.value==3 ? query({type:'product_filter_category',column:'teen'}) :
            this.value==4 ? query({type:'product_filter_category',column:'kids'}) :
            this.value==5 ? query({type:'product_filter_type',column:'t-shirt'}) :
            this.value==6 ? query({type:'product_filter_type',column:'sweater'}) :
            this.value==7 ? query({type:'product_filter_type',column:'scarf'}) :
            this.value==8 ? query({type:'product_filter_type',column:'jacket'}) :
            this.value==9 ? query({type:'product_filter_type',column:'hoodie'}) :
            this.value==10 ? query({type:'product_filter_type',column:'headwear'}) :
            this.value==11 ? query({type:'product_filter_type',column:'button down shirt'}) :
            query({type:'everything'})
        ).then(showResults);*/
        let value = this.value;
        (
            value == 'everything' ? query({type:'everything'}) :
            query({type:'product_filter_category',column:value})
            //query({type:'everything'})
        ).then(showResults);
    })

    $(".js-sort").on("change",function(e){
        (
            // if the value selected is 1, query a type of product_sort, pass back a column called date_create, and pass back a direction of Descending
            this.value==1 ? query({type:'product_sort',column:'date_create',dir:'DESC'}) :
            this.value==2 ? query({type:'product_sort',column:'date_create',dir:'ASC'}) :
            this.value==3 ? query({type:'product_sort',column:'price',dir:'ASC'}) :
            this.value==4 ? query({type:'product_sort',column:'price',dir:'DESC'}) :
            this.value==5 ? query({type:'product_sort',column:'name',dir:'ASC'}) :
            this.value==6 ? query({type:'product_sort',column:'name',dir:'DESC'}) :
            // if neither are true, we will just have everything
            query({type:'everything'})
        ).then(showResults);
    })
})