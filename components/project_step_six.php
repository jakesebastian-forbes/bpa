<h2>Schedule Signing</h2>

  <style>
   

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: center;
    }

    th {
      background-color: #f2f2f2;
    }

    .time-column {
      font-weight: bold;
    }

    .event {
      background-color: #4CAF50;
      color: #fff;
      font-weight: bold;
    }

    .add-event {
      margin-top: 10px;
    }

    .event-form {
      display: flex;
      align-items: center;
    }

    .event-input {
      flex-grow: 1;
      margin-right: 10px;
    }

    .add-button {
      cursor: pointer;
      padding: 5px 10px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 4px;
    }
  </style>



  <table>
    <thead>
      <tr>
        <th>Time</th>
        <th>Monday</th>
        <th>Tuesday</th>
        <th>Wednesday</th>
        <th>Thursday</th>
        <th>Friday</th>
        <th>Saturday</th>
      </tr>
    </thead>
    <tbody id="calendar-body">
      <!-- Calendar body will be dynamically populated using JavaScript -->
    </tbody>
  </table>

  <div class="add-event">
    <div class="event-form">
      <input type="text" id="event-input" class="event-input" placeholder="Event description">
      <button onclick="addEvent()" class="add-button">Add Event</button>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script>
    // Function to initialize the calendar
    function initializeCalendar() {
      const calendarBody = $('#calendar-body');
      const timeSlots = generateTimeSlots();
      
      // Loop through each time slot
      timeSlots.forEach(timeSlot => {
        const row = $('<tr>');
        row.append($('<td class="time-column">').text(timeSlot));

        // Add cells for each day
        for (let i = 0; i < 6; i++) {
          row.append($(`<td id="${getDayName(i)}_${timeSlot}">`));
        }

        calendarBody.append(row);
      });
    }

    // Function to generate time slots from 6:00 AM to 6:00 PM with 15-minute intervals
    function generateTimeSlots() {
      const timeSlots = [];
      let currentTime = new Date(0);
      currentTime.setUTCHours(6, 0, 0, 0);

      while (currentTime.getHours() < 18 || (currentTime.getHours() === 18 && currentTime.getMinutes() === 0)) {
        timeSlots.push(currentTime.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' }));
        currentTime.setMinutes(currentTime.getMinutes() + 15);
      }

      return timeSlots;
    }

    // Function to get the day name based on the index (0 = Monday, 1 = Tuesday, ..., 5 = Saturday)
    function getDayName(index) {
      const days = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday'];
      return days[index];
    }

    // Function to add an event to the calendar
    function addEvent() {
      const eventInput = $('#event-input');
      const description = eventInput.val();

      if (description) {
        const selectedCell = $(`#${selectedDay}_${selectedTime}`);
        selectedCell.text(description);
        selectedCell.addClass('event');

        // Clear the input and selected values
        eventInput.val('');
        selectedDay = null;
        selectedTime = null;
      }
    }

    let selectedDay = null;
    let selectedTime = null;

    // Event listener to handle cell selection
    $(document).on('click', 'td:not(.time-column)', function () {
      const cell = $(this);
      const idParts = cell.attr('id').split('_');

      // Update selected values
      selectedDay = idParts[0];
      selectedTime = idParts[1];

      // Highlight the selected cell
      $('td').removeClass('selected-cell');
      cell.addClass('selected-cell');
    });

    // Initialize the calendar when the page is loaded
    $(document).ready(function () {
      initializeCalendar();
    });
  </script>
