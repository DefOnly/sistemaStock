function validaCampos(){
    
    let code = document.getElementById("code").value;
    let name = document.getElementById("name").value;
    let category = document.getElementById("category").selectedIndex;
    let select = document.getElementById("select").selectedIndex;
    let quantity = document.getElementById("quantity").value;
    let price = document.getElementById("price").value;
    let description = document.getElementById("description").value;

    if(code === ""){
    toastr.error("No ha ingresado Código","Aviso!");
        return false;
    }
    if(name === ""){
    toastr.error("No ha ingresado Nombre","Aviso!");
        return false;
    }

    if(category === ""){
    toastr.error("No ha ingresado Categoría","Aviso!");
        return false;
    }

    if(select == 0){
    toastr.error("No ha ingresado Sucursal","Aviso!");
        return false;
    }

    if(quantity === ""){
    toastr.error("No ha ingresado Cantidad","Aviso!");
        return false;
    }

    if(price === ""){
    toastr.error("No ha ingresado Precio","Aviso!");
        return false;
    }

    if(description === ""){
    toastr.error("No ha ingresado Descripción","Aviso!");
        return false;
    }
}