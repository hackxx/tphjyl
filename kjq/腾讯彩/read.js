var rf=require("fs");  
var data=rf.readFileSync("E:/yhyl/App/App/OpenNumber.ini","utf-8");  
var arr = data.trim().split("\r\n");
arr = arr[arr.length-1].trim().split("=");
console.log(arr);
data = [];
data['number'] = arr[0];
data['data'] = arr[1].substring(0,9);
data['time'] = (new Date().getTime() + '').substring(0,10);
console.log(data);