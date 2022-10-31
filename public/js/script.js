function confirmar(){

    Swal.fire({
        title: 'Tem certeza que quer excluir?',
        showCancelButton: true,
        confirmButtonText: 'Confirmar',
        cancelButtonText: 'Cancelar',
        confirmButtonColor: 'green',
      }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            document.getElementById("btndeletar").submit()
        //  Swal.fire('Excluído com sucesso')
        Swal.fire({
        title: 'Excluído com sucesso',
        confirmButtonColor: 'gray',
      })
          return true;
        } else {
          return false;
        }
      })
    }

    function atualizar(){

      Swal.fire({
          title: 'Tem certeza que quer atualizar o cadastro?',
          showCancelButton: true,
          confirmButtonText: 'Confirmar',
          cancelButtonText: 'Cancelar',
          confirmButtonColor: 'blue',
        }).then((result) => {
          /* Read more about isConfirmed, isDenied below */
          if (result.isConfirmed) {
              document.getElementById("btnatualiza").submit()
          //  Swal.fire('Excluído com sucesso')
          Swal.fire({
          title: 'Atualizado com sucesso',
          confirmButtonColor: 'green',
        })
            return true;
          } else {
            return false;
          }
        })
      }
    