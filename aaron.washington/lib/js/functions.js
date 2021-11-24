// query will be the front end option for getting data from the back end
// pass in an object of "options" to this function and it returns a fetch, which is a js "promise" 
const query = (options) => {
    // fetch(), a js promise, promises to start and finish then do what you want when it finishes, which is then()
    return fetch('data/api.php',{
        method:'POST',
        body: JSON.stringify(options),
        headers:{'Content-type':'spplication/json'}
    }).then(d=>d.json());
}