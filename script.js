function clearLoginCookieAndRedirectToIndex() {

    document.cookie = "login=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
  
  
    window.location.href = "Index.php";
  }




  const input = document.querySelector('input[type="date"]');
  const dateValue = input.value; 
  const selectedDate = new Date(dateValue);
  const selectedDay = selectedDate.getDate();
  const selectedMonth = selectedDate.getMonth() + 1; 
  if (selectedDay === currentDay && selectedMonth === currentMonth) {
    console.log('Выбрана текущая дата');
  } else {
    console.log('Выбрана не текущая дата');
  }