window.onload = function () {
    document.querySelector("body").onclick = function (event) {
        let clickEl = event.target;
        if (clickEl.type == "submit") {
            let operand = clickEl.name;
            (async () => {
                let val1 = document.getElementById('val1').value;
                let val2 = document.getElementById('val2').value;
                if (isNaN(+val1) || isNaN(+val2)) {
                    let val3 = document.getElementById('val3');
                    val3.value = "Оба значения должны быть числом";
                    return;
                }

                const response = await fetch('add.php', {
                    method: "POST",
                    headers: {
                        'Content-Type': 'application/json;charset=utf-8'
                    },
                    body: JSON.stringify({operator1: val1, operator2: val2, operation: operand}),

                });
                const answer = await response.json();
                let val3 = document.getElementById('val3');
                val3.value = `${answer.result}`;
            })();
        }
    }
};
