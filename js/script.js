/* qu = prompt('What\'s your question?');
if(qu == "Why is the sky blue?" || qu == "Why is the sky blue" || qu == "why is the sky blue" || qu == "why is the sky blue?") {
    alert("A clear cloudless day-time sky is blue because molecules in the air scatter blue light from the sun more than they scatter red light. When we look towards the sun at sunset, we see red and orange colours because the blue light has been scattered out and away from the line of sight.");
}
else {
    alert("Sorry, my responses are limited, please try asking \"Why is the sky blue?\"")
}
*/
$('#ask').click(function () {
    var que = $('#question').val();
    var qu = que.toLowerCase();
    if (qu == "why is the sky blue?" || qu == "why is the sky blue") {
        $('#answer').html("A clear cloudless day-time sky is blue because molecules in the air scatter blue light from the sun more than they scatter red light. When we look towards the sun at sunset, we see red and orange colours because the blue light has been scattered out and away from the line of sight.");
    }
    else if (qu == "how much money do i have in my isa?" || qu == "how much money do i have in my isa") {
        $('#answer').html("<p class='text-center'>We've checked your ISA for you and found that you have £1256. Keep up the good work!</p>");
        }
    else {
        $('#answer').html("<p class='text-center'>Sorry, my responses are limited, please try asking \"Why is the sky blue?\" or \"How much money do I have in my ISA?\"</p>");
        }
});
