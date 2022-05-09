function getTotalMembers() {
    getData("App/Handlers/user/getTotalMembers.php","totalMembers");
}
getTotalMembers();

function getTotalPaidRCB() {
    let amount = 245;
    return "$" + amount;
}
document.getElementById('paidRCB').innerText =  getTotalPaidRCB(); //USD

function getTotalRCBProcessed() {
    return "99";
}
document.getElementById('processedRCB').innerText = getTotalRCBProcessed(); //Num

