

const listItemTemplate = templater(o=>`
<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
    <a href="product.php?id=${o.id}&category=${o.category}&type=${o.type}">
        <figure class="figure product-overlay">
            <img src="img/${o.thumbnail}" alt="${o.name} &ndash; ${o.category}" title="${o.name} &ndash; ${o.category}" />
            <figcaption>
                <div class="caption-body">
                    <h4>${o.name}</h4>
                    <p>&dollar;${o.price.toFixed(2)}</p>
                </div>
            </figcaption>
        </figure>
    </a>
</div>
`);