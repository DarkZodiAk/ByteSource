function rate(){
    var score = document.getElementById("irange")
    var res = document.getElementsByTagName("span")[1]
    res.innerHTML="Ваша оценка: "+score.value+"/10"
}

function theme(){
    var lside = document.getElementById("lside")
    var rside = document.getElementById("rside")
    if(document.body.style.background!="rgb(54, 57, 63)"){
        document.body.style.background = "#36393F"
        document.body.style.color = "#EAE9E6"
        lside.style.background = "#384982"
        rside.style.background = "#384982"
    } else{
        document.body.style.background = "#E19192"
        document.body.style.color = "#000000"
        lside.style.background = "#F5B393"
        rside.style.background = "#F5B393"
    }
}


function send(form){

    if(!form.text.checkValidity()){
        alert("Пожалуйста, введите имя правильно")
    } else if(!form.email.checkValidity()){
        alert("Пожалуйста, введите почту правильно")
    } else if(!form.radiobutton[0].checked && !form.radiobutton[1].checked){
        alert("Пожалуйста, выберите пол")
    } else{

        var txt = "Ваше имя: " + form.text.value + "\n" + "Ваша почта: " + form.email.value + "\n" + "Ваш пол: "
        if(form.radiobutton[0].checked) txt += "Мужской"
        else txt += "Женский"
        txt += "\nВы оценили эту страничку на " +  form.irange.value + "/10"
        if(form.textarea.value!="") txt += "\nВот что вы еще написали: " + form.textarea.value

        alert("Отзыв успешно составлен!\n"+txt)
    }
}


function add(form){
    var div = document.createElement("div")
    var newh4 = document.createElement("h4")

    newh4.innerHTML = form.header.value + " <input type=\"button\" onclick=\"del(this)\" value=\"Удалить\"/>"
    var txt = form.sometxt.value

    var block = document.getElementById("addition")
    div.style.width = "655px"
    
    div.appendChild(newh4)
    div.innerHTML += txt
    block.appendChild(div)

    document.body.style.height = document.body.scrollHeight + 70 + "px"
}

function del(toDel){
    var block = document.getElementById("addition")
    var toDel_parent=toDel.parentNode
    toDel_parent.parentNode.remove(toDel_parent)

    document.body.style.height = "2300px"
    if(block.childElementCount>0){
        document.body.style.height = document.body.scrollHeight + 70 + "px"
    } else{
        document.body.style.height = "2300px"
    }
    
}