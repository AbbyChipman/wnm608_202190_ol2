// query will be the front end option for getting data from the back end
// pass in an object of "options" to this function and it returns a fetch, which is a js "promise" 
const query = (options) => {
    // fetch(), a js promise, promises to start and finish then do what you want when it finishes, which is then()
    return fetch('data/api.php',{
        method:'POST',
        body: JSON.stringify(options),
        headers:{'Content-Type':'application/json'}
    }).then(d=>d.json());
}


// Currying is making a function that makes functions, useful for libraries of code
// This is a function that turns into a function that accepts an array
const templater = f => a =>
    // If the a passed in here is an array, we use it. If not, we make it an array
    (Array.isArray(a)?a:[a])
    .reduce((r,o,i,a)=>r+f(o,i,a),'');
    //  r is reducing value, o is object as you loop through, i is the index of the current object in the array, a is the array being looped
