
function descargar(){

   let folio = document.getElementById('folio').value;


    let folio_nuevo= parseInt(folio);
    folio_nuevo= folio_nuevo+1;

    document.getElementById('folio').value=folio_nuevo;
}