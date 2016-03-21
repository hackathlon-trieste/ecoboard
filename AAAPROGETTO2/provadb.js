// JavaScript File

$(function () {
    $.getJSON('https://api-sandbox.everyware-cloud.com/v2/messages/searchByTopic.json?topic=Hackathon-Trieste/EMS-V1/D/sns/haverages&limit=10&offset=0&&startDate=2016-03-19T09:00:00.000Z&endDate=2016-03-20T09:00:00.000Z', function (data) {
        console.log(data);
    });
});

//2016-03-19T09:00:00.000Z