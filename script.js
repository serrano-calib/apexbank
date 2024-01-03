let url, requestBody;

requestBody = new FormData();
requestBody.append('name', "firefox");
url = "https://apexapp.tech/goodbank/server.php";
url2 = "https://apexapp.tech/goodbank/session.php";
//url = "./server.php";
//url2 = "./session.php";

fetch(url, {
        method: 'POST',
        body: requestBody
}).then((response) => response.text()).then((data) => {
	console.log(data)
        return fetch(url2);
}).then((response) => response.text()).then((data) => {
        console.log(data);
});
