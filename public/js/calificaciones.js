const { round, isEmpty, isNull, isNumber } = require("lodash");


function ponderacion(){
    
    let nota_1 = document.getElementById('nota_1').value; 
    let nota_2 = document.getElementById('nota_2').value; 


    let calculo= (nota_1 * 40 / 100)+( nota_2 * 60 / 100);

    let redondeo = Math.round(calculo);

    if(nota_1>=1 && nota_2>=1){
        document.getElementById('nota_fin').value=redondeo;
    }else{
        document.getElementById('nota_fin').value=null;

    }


    if(redondeo>=6 && nota_2>=6){

        document.getElementById('cal_def').value=redondeo;

        document.getElementById('nota_dic').readOnly =true;

        document.getElementById('nota_feb').readOnly =true;

        document.getElementById('nota_dic').value=null;

        document.getElementById('nota_feb').value=null;
        document.getElementById('fecha').value='2021-12-15';
        document.getElementById('examen').value='R';
       
    }else{
        document.getElementById('nota_dic').readOnly =false;

        document.getElementById('nota_feb').readOnly =true;

        document.getElementById('cal_def').value=null;

        document.getElementById('fecha').value='2021-12-23';
        document.getElementById('examen').value='R';
    }

    
}


function diciembre(){

    let nota_dic= document.getElementById('nota_dic').value;

    if(nota_dic>=6){

        document.getElementById('nota_feb').value=null;

        document.getElementById('cal_def').value=nota_dic;

        document.getElementById('nota_feb').readOnly=true;
        document.getElementById('fecha').value='2021-12-23';
        document.getElementById('examen').value='R';
    }else{
        document.getElementById('nota_feb').readOnly=false;

        document.getElementById('cal_def').value=null;

        document.getElementById('fecha').value='2022-02-25';
        document.getElementById('examen').value='R';

    }


}


function febrero(){

    let nota_feb= document.getElementById('nota_feb').value;

    if(nota_feb>=6){
         document.getElementById('cal_def').value=nota_feb;
         document.getElementById('fecha').value='2022-02-25';
        document.getElementById('examen').value='R';
    }else{
        document.getElementById('cal_def').value=nota_feb;
        document.getElementById('fecha').value='2022-02-25';
        document.getElementById('examen').value='R';
    }

    
      
    
}