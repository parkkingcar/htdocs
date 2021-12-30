
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/question.css">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="1030174904618-sgks27l25s38pv03n0qc56lvqtrosn43.apps.googleusercontent.com">

</head>
<body style="background-color:whitesmoke;">
<div class="right" style="font-size:15px;margin-right:800px;width:320px;margin-top:350px;border:1px solid black;">
    <p>로그인</p>
    <div class="g-signin2" data-onsuccess="onSignIn"></div>
    <p>회원가입</p>
    <div class="g-signin2" data-onsuccess="onSignIn2"></div>
    <a href="logout.php" onclick="signOut();">Sign out</a>
    <script>
        function signOut() {
            var auth2 = gapi.auth2.getAuthInstance();
            auth2.signOut().then(function () {
                console.log('User signed out.');
            });
            auth2.disconnect();
        }
    </script>
</div>

<script>
    function onSignIn(googleUser) {
        var profile = googleUser.getBasicProfile();
        let email = profile.getEmail();
        let xml = new XMLHttpRequest();
        signOut()

        document.cookie = "google = " + email;
        window.location.href = "loginAdmin.php";
    }

    function onSignIn2(googleUser) {
        var profile = googleUser.getBasicProfile();
        let email = profile.getEmail();
        signOut()

        document.cookie = "google = " + email;
        window.location.href = "registerAdmin.php";
    }
</script>

</body>
</html>

