function createInsertQuery(table_name){
    let execute = document.querySelector("#insert input[name='execute']")
    let form = document.querySelector("#insert")
    let inputs = document.querySelectorAll(".insert-input")
    let query = `INSERT INTO \`${table_name}\` ?rows VALUES ?val;`
    let rows = execute.value.split(" ")
    let rows2 = []
    let values = []
    inputs.forEach((e, i)=> {
        if (e.value.length > 0){
            values.push(e.value)
            rows2.push(rows[i])
        }
    })
    let value = `(${values.join(", ")})`
    let row = `(${rows2.join(", ")})`
    execute.value = query.replace("?rows", row).replace("?val", value)
    form.submit()
}