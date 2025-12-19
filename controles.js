
function alphab(ch){
    test = true
    for (i=0;i<ch.length;i++){
        if (!(ch[i]>="A" && ch[i]<="Z")){
            test = false
        }
    }
    return test
}

function numer(ch){
    test = true
    for (i=0;i<ch.length;i++){
        if (!(ch[i]>="0" && ch[i]<="9")){
            test = false
        }
    }
    return test
}


function alphab2(ch){
    test = true
    ch = ch.toUpperCase()
    for (i=0;i<ch.length;i++){
        if (!((ch[i]>="A" && ch[i]<="Z") || ch[i]==" ")){
            test = false
        }
    }
    return test
}

function nbesp(ch){
    s = 0
    for (i=0;i<ch.length;i++){
        if ((ch[i]==" ")){
            s = s + 1
        }
    }
    return s
}

function vref(ch){
    if (!(ch!="" && ch.length==10)){
        return false
    }
    ch1 = ch.substring(0,2)
    ch2 = ch.substring(2,8)
    ch3 = ch.substring(8,11)
    if (!(alphab(ch1) && alphab(ch3) && numer(ch2))){
        return false
    }
    return true
}

function vnom(ch){
    if (!(ch!="" && alphab2(ch))){
        return false
    }
    if ((nbesp(ch)>1)){
        return false
    }
    return true
}

function verif(){
    document.getElementById("ref").style.borderColor="black"
    document.getElementById("div1").style.borderColor="black"
    document.getElementById("etat").style.borderColor="black"
    document.getElementById("nomR").style.borderColor="black"
    document.getElementById("nomE").style.borderColor="black"

    rref = document.getElementById("ref").value
    

    if (!(vref(rref))){
        document.getElementById("ref").style.borderColor="red"
        return false
    }
    nomR = document.getElementById("nomR").value
    nomE = document.getElementById("nomE").value
   


    

    if (!(vnom(nomE))){
        document.getElementById("nomE").style.borderColor="red"
        return false
    }
            alert("here")

    if (!(vnom(nomR))){
        document.getElementById("nomR").style.borderColor="red"
        return false
    }


    et = document.getElementById("etat").selectedIndex




    if (et == 0){
        document.getElementById("etat").style.borderColor="red"
        return false
    }
    box=document.getElementById("box").checked
    if (!(box)){
        document.getElementById("div1").style.borderColor="red"
        return false
    }

    alert("jawek behi")




}

function verif2(){
    document.getElementById("ref").style.borderColor="black"
    document.getElementById("div2").style.borderColor="black"

    rref = document.getElementById("ref").value
    

    if (!(vref(rref))){
        document.getElementById("ref").style.borderColor="red"
        return false}

   
    box=document.getElementById("chk").checked

    if (!(box)){
            document.getElementById("div2").style.borderColor="red"
            return false
        }

    alert("jawek behi")
    return true
    

}