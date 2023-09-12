function setAlarm() {
  const alarmTime = document.getElementById('alarm-time').value;
  const now = new Date();
  const alarm = new Date(now.toDateString() + ' ' + alarmTime);

  const currentTime = now.getTime();
  const alarmTimeMillis = alarm.getTime();

  if (isNaN(alarmTimeMillis)) {
      alert('Hora do alarme inválida. Use o formato HH:MM.');
      return;
  }

  if (alarmTimeMillis <= currentTime) {
      alert('O horário do alarme deve ser no futuro.');
      return;
  }

  const timeUntilAlarm = alarmTimeMillis - currentTime;

  setTimeout(() => {
      alert('Alarme disparado! É hora de acordar!');
  }, timeUntilAlarm);
}
