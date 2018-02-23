<form name="input"  method="post" class="form-horizontal">

    <h1>Calculadora Salarial</h1>
        <div class="form-group">
            <label for="bruto_anual" class="col-md-2 control-label">Bruto anual</label>
            <div class="col-md-8">
                <input type="text" id="bruto_anual" name="textinput" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="num_pagas" class="col-md-2 control-label">Número de pagas</label>
            <div class="col-md-8">
                <input type="text" id="num_pagas" name="textinput" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="tipo_contrato" class="col-md-2 control-label">Tipo de contrato</label>
            <div class="col-md-8">
                <select id="tipo_contrato" name="tipo_contrato" class="form-control">
                    <option value="1">Menos de un año</option>
                    <option value="2">Especiales</option>
                    <option value="3">Indefinido</option>
                </select>
            </div>

        </div>
        <div class="form-group">
            <label for="num_hijos" class="col-md-2 control-label">Número de hijos</label>
            <div class="col-md-8">
                <input type="number" id="num_hijos" name="textinput" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="importe" class="col-md-2 control-label">Tipo contribuyente <a href="#" title="A: Contribuyente viudo, divorciado, separado legalmente o soltero, con hijos menores de 18 años o mayores incapacitados sujetos a patria potestad con convivan exclusivamente con él.
                B: Contribuyente con cónyuge a cargo es aquel, que estando casado y no separado legalmente, su cónyuge no obtiene rentas anuales superiores a 1.500 euros, incluidas las exentas. C: Contribuyentes que no se encuentran en ninguno de los casos anteriores.">(?)</a></label>
            <div class="col-md-8">
                <select id="tipo_contribuyente" name="tipo_contribuyente" class="form-control">
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-5 col-md-offset-5">
                <input type="button" name="borrar" id="borrar" value="Borrar" class="btn btn-warning" onclick="document.calcuS.reset(); return false;">
                <input type="button" name="calcular" id="calcular" value="Calcular" class="btn btn-primary" onclick="calcularS(); return false;">
            </div>
        </div>

        <div class="form-group">
            <div class="form-group">
                <label for="cuota" class="col-md-2 control-label">Sueldo mensual</label>
                <div class="col-md-8">
                    <input type="text" id="sueldo_neto_mensual" name="cuota" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="cuota" class="col-md-2 control-label">Paga extra neta</label>
                <div class="col-md-8">
                    <input type="text" id="paga_extra_neta" name="cuota" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="cuota" class="col-md-2 control-label">I.R.P.F.</label>
                <div class="col-md-8">
                    <input type="text" id="irpf" name="cuota" class="form-control">
                </div>
            </div>
        </div>


</form>
<script>
    function calcularS() {
        var bruto_anual = document.getElementById("bruto_anual");
        var num_pagas = document.getElementById("num_pagas");
        var tipo_contrato = document.getElementById("tipo_contrato");
        var num_hijos = document.getElementById("num_hijos");
        var tipo_contribuyente = document.getElementById("tipo_contribuyente");
        var indicePunto = bruto_anual.value.indexOf('.')
        var hayPunto = false
        if (indicePunto != -1)
            hayPunto = true
        var indiceComa = bruto_anual.value.indexOf(",")
        var hayComa = false
        if (indiceComa != -1)
            hayComa = true
        var subcadena1;
        var subcadena2;
        var Subcadena3;
        var longitud = bruto_anual.length;
        if (hayPunto && hayComa) {
            subcadena1 = bruto_anual.value.substring(0, indicePunto)
            subcadena2 = bruto_anual.value.substring(indicePunto + 1, indiceComa)
            subcadena3 = bruto_anual.value.substring(indiceComa + 1, longitud)
            bruto_anual.value = subcadena1 + subcadena2 + "." + subcadena3
        } else if (hayComa) {
            subcadena1 = bruto_anual.value.substring(0, indiceComa)
            subcadena2 = bruto_anual.value.substring(indiceComa + 1, longitud)
            bruto_anual.value = subcadena1 + "." + subcadena2
        } else if (hayPunto) {
            subcadena1 = bruto_anual.value.substring(0, indicePunto)
            subcadena2 = bruto_anual.value.substring(indicePunto + 1, longitud)
            bruto_anual.value = subcadena1 + subcadena2
        }
        if (bruto_anual.value == "" || isNaN(bruto_anual.value) || bruto_anual.value <= 0) {
            bruto_anual.value = "";
            bruto_anual.focus();
            alert("Bruto anual: Introduzca un valor válido.")
        } else if (num_pagas.value == "" || isNaN(num_pagas.value) || num_pagas.value <= 0) {
            num_pagas.value = "";
            num_pagas.focus();
            alert("N?mero de pagas: Introduzca un valor válido.")
        } else if (num_pagas.value < 12) {
            num_pagas.value = "12";
            num_pagas.focus();
            alert("El numero de pagas debe ser como mínimo 12.");
        } else if (num_hijos.value == "" || isNaN(num_hijos.value) || num_hijos.value < 0) {
            num_hijos.value = "";
            num_hijos.focus();
            alert("Número de hijos: Introduzca un valor válido.")
        } else {
            limite_retencion = 0
            if (tipo_contribuyente.value == 'A') {
                if (num_hijos.value == 0)
                    tipo_contribuyente.value = 'C';
                if (num_hijos.value == 1)
                    limite_retencion = 13662;
                else if (num_hijos.value > 1)
                    limite_retencion = 15617;
            }
            if (tipo_contribuyente.value == 'B') {
                if (num_hijos.value == 0)
                    limite_retencion = 13335;
                else if (num_hijos.value == 1)
                    limite_retencion = 14774;
                else if (num_hijos.value > 1)
                    limite_retencion = 16952;
            }
            if (tipo_contribuyente.value == 'C') {
                if (num_hijos.value == 0)
                    limite_retencion = 11162;
                else if (num_hijos.value == 1)
                    limite_retencion = 11888;
                else if (num_hijos.value > 1)
                    limite_retencion = 12519;
            }
            if ((bruto_anual.value / num_pagas.value) <= 3596.98)
                var ss_anual = bruto_anual.value * 6.35 / 100
            else
                var ss_anual = (3596.98 * 12) * 6.35 / 100;
            var total_impuestos = 0;
            var tipo_retencion_redondeado = 0;
            var total_minimos = 0;
            if (bruto_anual.value > limite_retencion) {
                var base_imputable = (bruto_anual.value - ss_anual)
                var reduccion = 0
                if (base_imputable <= 9180)
                    reduccion = 4080
                else if (base_imputable > 13260)
                    reduccion = 2652
                else
                    reduccion = 4080 - 0.35 * (base_imputable - 9180)
                var reduccion_hijos = 0
                if (num_hijos.value > 2)
                    reduccion_hijos = 600
                base_imputable = base_imputable - reduccion - reduccion_hijos
                var cuota_retencion_1 = 0
                if (base_imputable <= 17707.2) {
                    cuota_retencion_1 = base_imputable * 0.2475;
                } else {
                    if ((base_imputable > 17707.2) && (base_imputable <= 33007.2)) {
                        cuota_retencion_1 = 4382.53 + (base_imputable - 17707.2) * 0.30;
                    } else {
                        if ((base_imputable > 33007.2) && (base_imputable <= 53407.2)) {
                            cuota_retencion_1 = 8972.53 + (base_imputable - 33007.2) * 0.40;
                        } else {
                            if ((base_imputable > 53407.2) && (base_imputable <= 120000.2)) {
                                cuota_retencion_1 = 17132.53 + (base_imputable - 53407.2) * 0.47;
                            } else {
                                if ((base_imputable > 120000.2) && (base_imputable <= 175000.2)) {
                                    cuota_retencion_1 = 48431.24 + (base_imputable - 120000.2) * 0.49;
                                } else {
                                    if ((base_imputable > 175000.2) && (base_imputable <= 300000.2)) {
                                        cuota_retencion_1 = 75381.24 + (base_imputable - 1750000.2) * 0.51;
                                    } else {
                                        cuota_retencion_1 = 139131.24 + (base_imputable - 300000.2) * 0.52;
                                    }
                                }
                            }
                        }
                    }
                }
                var minimo_personal = 5151
                var descendientes = 0
                var divisor = 1
                if (tipo_contribuyente.value == 'B' || tipo_contribuyente.value == 'C') {
                    divisor = 2
                } else if (tipo_contribuyente.value == 'A') {
                    divisor = 1
                }
                if (num_hijos.value == 0)
                    descendientes = 0;
                if (num_hijos.value == 1)
                    descendientes = 1836 / divisor;
                else if (num_hijos.value == 2)
                    descendientes = (1836 + 2040) / divisor;
                else if (num_hijos.value == 3)
                    descendientes = (1836 + 2040 + 3672) / divisor;
                else if (num_hijos.value >= 4)
                    descendientes = (1836 + 2040 + 3672 + ((num_hijos.value - 3) * 4182)) / divisor;
                total_minimos = minimo_personal + descendientes
                var cuota_retencion_2 = 0
                if (total_minimos <= 17707.2) {
                    cuota_retencion_2 = total_minimos * 0.2475;
                } else {
                    if ((total_minimos > 17707.2) && (total_minimos <= 33007.2)) {
                        cuota_retencion_2 = 4382.53 + (total_minimos - 17707.2) * 0.30;
                    } else {
                        if ((total_minimos > 33007.2) && (total_minimos <= 53407.2)) {
                            cuota_retencion_2 = 8972.53 + (total_minimos - 33007.2) * 0.40;
                        } else {
                            if ((total_minimos > 53407.2) && (total_minimos <= 120000.2)) {
                                cuota_retencion_2 = 17132.53 + (total_minimos - 53407.2) * 0.47;
                            } else {
                                if ((total_minimos > 120000.2) && (total_minimos <= 175000.2)) {
                                    cuota_retencion_2 = 48431.24 + (total_minimos - 120000.2) * 0.49;
                                } else {
                                    if ((total_minimos > 175000.2) && (total_minimos <= 300000.2)) {
                                        cuota_retencion_2 = 75381.24 + (total_minimos - 1750000.2) * 0.51;
                                    } else {
                                        cuota_retencion_2 = 139131.24 + (total_minimos - 300000.2) * 0.52;
                                    }
                                }
                            }
                        }
                    }
                }
                var cuota_retencion_total = cuota_retencion_1 - cuota_retencion_2
                var limite_cuota = 0
                if (cuota_retencion_total < 0) {
                    cuota_retencion_total = 0;
                } else {
                    if (bruto_anual.value <= 22000) {
                        limite_cuota = (bruto_anual.value - limite_retencion) * 0.43;
                        if (cuota_retencion_total > limite_cuota)
                            cuota_retencion_total = limite_cuota;
                    }
                }
                var tipo_retencion = 0
                if (tipo_contrato.value == 1)
                    tipo_retencion = 2;
                else if (tipo_contrato.value == 2)
                    tipo_retencion = 15;
                else
                    tipo_retencion = (cuota_retencion_total / bruto_anual.value) * 100;
                tipo_retencion_redondeado = Math.round(tipo_retencion, 0);
            }
            neto_anual = bruto_anual.value - ((bruto_anual.value * tipo_retencion_redondeado) / 100);
            ss_mensual = ss_anual / 12;
            var extra = null;
            if (num_pagas.value > 12) {
                paga_extra = neto_anual / num_pagas.value;
            } else {
                paga_extra = "";
            }
            neto_mensual = (neto_anual / num_pagas.value) - ss_mensual;
            var pixelIMG = document.createElement("IMG");
            var pixelURL = "http://beacon.krxd.net/event.gif?event_id=K1r5Myud&event_type=fd&salary=" + bruto_anual.value + "&payments=" + num_pagas.value + "&contract=" + tipo_contrato.options[tipo_contrato.selectedIndex].innerHTML + "&children=" + num_hijos.value + "&taxpayer=" + tipo_contribuyente.options[tipo_contribuyente.selectedIndex].innerHTML;
            pixelIMG.src = pixelURL;
            pixelIMG.width = 0;
            pixelIMG.height = 0;
            document.body.appendChild(pixelIMG);
            document.getElementById("sueldo_neto_mensual").value = Math.round(neto_mensual * 100) / 100;
            document.getElementById("paga_extra_neta").value = Math.round(paga_extra * 100) / 100;
            document.getElementById("irpf").value = Math.round(tipo_retencion_redondeado * 100) / 100;
        }
    }

</script>