const confirmPayment = () => {
    const method = $('.method').val()
    const amount = $('.amount').val()

    const id = Math.floor(Math.random() * 999999999999999999999999999)

    const data = {
        method, amount, entry_id: id
    }

    console.log(data)
    
    $.get('/api/payment/create', data, (res) => {
        console.log(res)

        alert(res.response)
    })
}

