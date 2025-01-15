document.addEventListener("DOMContentLoaded", () => {
    // Admin Table Filter and Pagination
    const adminSearch = document.getElementById("adminSearch");
    const adminEntries = document.getElementById("adminEntries");
    const adminTable = document.getElementById("adminTable").querySelector("tbody");
  
    const studentSearch = document.getElementById("studentSearch");
    const studentEntries = document.getElementById("studentEntries");
    const studentTable = document.getElementById("studentTable").querySelector("tbody");
  
    function filterTable(searchInput, tableBody) {
      const filter = searchInput.value.toLowerCase();
      const rows = tableBody.querySelectorAll("tr");
      rows.forEach(row => {
        const text = row.textContent.toLowerCase();
        row.style.display = text.includes(filter) ? "" : "none";
      });
    }
  
    function limitEntries(selectInput, tableBody) {
      const rows = Array.from(tableBody.querySelectorAll("tr"));
      const limit = parseInt(selectInput.value, 10);
      rows.forEach((row, index) => {
        row.style.display = index < limit ? "" : "none";
      });
    }
  
    adminSearch.addEventListener("input", () => filterTable(adminSearch, adminTable));
    adminEntries.addEventListener("change", () => limitEntries(adminEntries, adminTable));
    studentSearch.addEventListener("input", () => filterTable(studentSearch, studentTable));
    studentEntries.addEventListener("change", () => limitEntries(studentEntries, studentTable));
  });
  