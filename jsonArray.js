$(document).ready(function () {
    var persons = [
        {
            "id": 01,
            "firstname": "raju",
            "lastname": "keshari",
            "dob": "11-02-1994"
        },
        {
            "id": 02,
            "firstname": "Rohan",
            "lastname": "Ranjan",
            "dob": "10-03-1995"
        },
        {
            "id": 03,
            "firstname": "Rini",
            "lastname": "Chandra",
            "dob": "10-08-1995"
        }
    ];
    var heading = "<h2>Json Array Object</h2>";
    var table = "<table border='1'><tr><th>First Name</th><th>Last Name</th><th>DOB</th></tr>";

    $("#main").append(heading, table);

    for (var i = 0; i < persons.length; i++) {
        var row = "<tr><td>" + persons[i].firstname + "</td><td>" + persons[i].lastname + "</td><td>" + persons[i].dob + "</td></tr>";
        $("div table").append(row);
    }
    $("div table").append("</table>");

});