// @section('script-end')
    // <script type="text/javascript">
        $('#dp').change(function () {
            var c = this.checked ? 'T' : 'F';  
            if (c == "F") {  
                document.getElementById('dados-pessoais').style.display = 'none';
            }  
            if (c == "T") {  
                document.getElementById('dados-pessoais').style.display = 'block';
            }  
                    
        });
        $('#end').change(function () {
            var c = this.checked ? 'T' : 'F';  
            if (c == "F") {  
                document.getElementById('endereco').style.display = 'none';
            }  
            if (c == "T") {  
                document.getElementById('endereco').style.display = 'block';
            }  
                    
        });
        $('#db').change(function () {
            var c = this.checked ? 'T' : 'F';  
            if (c == "F") {  
                document.getElementById('dados-bancarios').style.display = 'none';
            }  
            if (c == "T") {  
                document.getElementById('dados-bancarios').style.display = 'block';
            }  
                    
        });
        $('#out').change(function () {
            var c = this.checked ? 'T' : 'F';  
            if (c == "F") {  
                document.getElementById('outros').style.display = 'none';
            }  
            if (c == "T") {  
                document.getElementById('outros').style.display = 'block';
            }  
                    
        });
        $(".desabilitado :input").attr("disabled", true);
    // </script>
// @endsection