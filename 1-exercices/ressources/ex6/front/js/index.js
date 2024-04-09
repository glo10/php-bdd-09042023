window.addEventListener('load', () => {
  document.querySelector('[name=country]').addEventListener('change', () => {
    fetch('http://localhost/ex6/back/cities.php', {
      headers: {
        "Content-Type": "application/json; charset=utf-8"
      },
      method: 'POST',
      body: JSON.stringify({ id: document.querySelector('[name=country]').value})
    })
      .then(cities => cities.json())
      .then(cities => {
        const selectCity = document.querySelector('[name=city')
        const options = selectCity.querySelectorAll('option:not([value="-1"])')
        options.forEach(opt => opt.remove())
        for(let i = 0; i < cities.length; i++) {
          const city = cities[i]
          const option = document.createElement('option')
          option.value = city.id
          option.innerText = city.name
          selectCity.append(option)
        }
      })
      .catch(error => console.error('error', error))
  })
})