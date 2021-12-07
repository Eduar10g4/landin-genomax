let ciudades = ["Barranquilla","Soledad","Bogota","Cali","Cartagena","Medellin"];

let ciudad = document.getElementById('ciudad')
function Recorrer(combobox,valores)
		{
			for (let index of valores) {
          combobox.innerHTML += `
                <option>${index}</option>
                `;
        }
      }
	  function llenarciu() {
        Recorrer(ciudad, ciudades);
      }
      llenarciu();
		