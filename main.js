window.onload = function () {
    document.getElementById('1').onclick = function () {
        let val1 = document.getElementById('val1').value;
        let val2 = document.getElementById('val2').value;
        (async () => {
            const response = await fetch('add.php', {
                method: "POST",
                headers: {
                    'Content-Type': 'application/json;charset=utf-8'
                },
                body: JSON.stringify({operator1: val1, operator2: val2}),

            });
            const result = await response;

           console.log(result);
        })();
    }
};


