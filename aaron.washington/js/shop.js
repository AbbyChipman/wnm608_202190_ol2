

const showResults = d => {
    // If there is some data "d", then we make the template with it, but if not, show text "No results"
    $(".shop-list").html(
        d.error?d.error:
        d.result.length?listItemTemplate(d.result):'Sorry, no awesome results'
        );
}

query({type:'Everything'}).then(showResults);

$(()=>{
    // e is the event data
    $("#shop-search").on("submit",function(e){
        // prevent the form from submitting
        e.preventDefault();
        let search = $(this).find("input").val();
        query({type:'product_search',search:search}).then(showResults);
    })

    $(".js-filter").on("change",function(e){

        let value = this.value;
        (
            value == 'Everything' ? query({type:'Everything'}) :
            value == 'Men' ? query({type:'product_filter_category',column:value}) :
            value == 'Women' ? query({type:'product_filter_category',column:value}) :
            value == 'Teen' ? query({type:'product_filter_category',column:value}) :
            value == 'Kids' ? query({type:'product_filter_category',column:value}) :
            query({type:'product_filter_type',column:value})
        ).then(showResults);
    })

    $(".crumb-second").on("click",function(e){

        let value = this.value;
        (
            value == 'Everything' ? query({type:'Everything'}) :
            value == 'Men' ? query({type:'product_filter_category',column:value}) :
            value == 'Women' ? query({type:'product_filter_category',column:value}) :
            value == 'Teen' ? query({type:'product_filter_category',column:value}) :
            value == 'Kids' ? query({type:'product_filter_category',column:value}) :
            query({type:'Everything'})
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
            query({type:'Everything'})
        ).then(showResults);
    })
})