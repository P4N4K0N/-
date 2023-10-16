const mysql = require("mysql2");
  
const connection = mysql.createConnection({
  host: "localhost",
  user: "root",
  database: "bd3",
  password: ""
});
connection.connect(function(err){
    if (err) {
      return console.error("Ошибка: " + err.message);
    }
    else{
      console.log("Подключение к серверу MySQL успешно установлено");
    }
 });

  let Query = "SELECT * FROM tests";
  let Geting = "SELECT * FROM tests WHERE result = 'success'";
  let Geting2 = "SELECT * FROM tests WHERE result = 'normal'";
  class MyClass{
    static method1(){
    connection.query(Geting, (err, result)=>{
    const name = {
    get scriptname(){
      return console.log(result);
    }
    }
    console.log(name.scriptname);
  })
  }
    static method12(){
      connection.query(Geting2, (err, result)=>{
        const name = {
        get scriptname(){
          return console.log(result);
        }
        }
        console.log(name.scriptname);
      })
    }
  
    static method2(){
      connection.query(Query, (err, result)=>{
      console.log(result.fill({
        id: 6,
        script_name: "ducimus",
        start_time: 608,
        end_time: 19750,
        result: "normal"
    }))
    })
  }
}
connection.query(Query, (err, result)=> {
  
  console.log(err);
  console.log(result);
})
console.log(MyClass.method2());
console.log(MyClass.method1());
console.log(MyClass.method12());
