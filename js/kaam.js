document.addEventListener("DOMContentLoaded",event => {
    const app = firebase.app();
});

//user log
function google(){
    const provider = new firebase.auth.GoogleAuthProvider();

    firebase.auth().signInWithPopup(provider)

    .then(result => {
        //user log
        const user = result.user;
        // to get user name to display
        const displayName = user.displayName;

        //to display user name
        document.write('Hello,'+displayName);
        console.log(user)
    })
    .catch(console.log)
}

var a =  document.getElementById('k').innerHTML

console.log(a)