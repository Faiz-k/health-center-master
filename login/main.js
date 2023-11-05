//setting up firebase with our website
const firebaseApp = firebase.initializeApp({ 
	apiKey: "AIzaSyB0f9e-3UMr3TqMFoH0XanEXRgxlx_Y12k",
        authDomain: "auth-form-880df.firebaseapp.com",
        projectId: "auth-form-880df",
        storageBucket: "auth-form-880df.appspot.com",
        messagingSenderId: "1094889665461",
        appId: "1:1094889665461:web:65ac3e2cfcb3e28f6c9ffc",
        measurementId: "G-ELW5VS6N9L"

 });
   const db = firebaseApp.firestore();
   const auth = firebaseApp.auth();



   firebase.auth().onAuthStateChanged(function(user) {
    if (user) {
      // User is signed in
      console.log('User is signed in:', user);
      document.getElementById('logoutBtn').style.display="block"
      document.getElementById('loginBtn').style.display="none"

      // Perform actions for a signed-in user
    } else {
      // No user is signed in
      console.log('No user is signed in.');
      document.getElementById('loginBtn').style.display="block"
      document.getElementById('logoutBtn').style.display="none"

      // Perform actions for a signed-out user
    }
  });
  



  function logot(){

    firebase.auth().signOut()
    .then(() => {
      // Sign-out successful.
      console.log('User signed out');
    })
    .catch((error) => {
      // An error happened.
      console.error('Error signing out:', error);
    });
  


  }

//sign up function 
const signUp=()=>{
  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;
  console.log(email, password)
  firebase.auth().createUserWithEmailAndPassword(email, password)
   .then((result) => {
    // Signed in 
    // document.write("You are Signed Up")
    window.location.href = "../index.html";
    alert("You are Signed In")
    // ...
  })
  .catch((error) => {
  	console.log(error.code);
	alert(error.message);
    // ..
  });
 }
const signIn = ()=>{
  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;
  //firebase code
  firebase.auth().signInWithEmailAndPassword(email, password)
  .then((result) => {
    // Signed in
    // document.write("You are Signed In")
    window.location.href = "../index.html";
    alert("You are Signed In")

    console.log(result)
    // ...
  })
  .catch((error) => {
    console.log(error.code);
	  alert(error.message)
  });
}