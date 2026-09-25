/**
 * ==========================================================================
 * DLE APPLICATION MASTER JAVASCRIPT (DleJS.js)
 * ==========================================================================
 * This consolidated script contains all interactive features for:
 *   - 1. COMMON / GLOBAL SCRIPTS (Profile Modal, Password Toggle, Dynamic Year)
 *   - 2. DLE DASHBOARD SCRIPTS (State Donut Chart, District Spline Area Chart, State Filtering)
 *   - 3. DLE REGISTRATION FORM SCRIPTS (Custom Select Dropdowns, Live Summary Sync,
 *        File Drag-and-Drop Zones, Reset & Submit Handlers)
 *   - 4. DLE USER DIRECTORY TABLE SCRIPTS (Real-Time Search & Filters, Profile/Doc Modals,
 *        Row Actions, New User Registration, CSV Export)
 * ==========================================================================
 */

/* ==========================================================================
   1. COMMON / GLOBAL SCRIPTS
   ========================================================================== */

/**
 * 1.1 Profile Modal & Password Toggle Controller
 * Handles toggling password change fields, eye icon visibility toggles, and modal reset.
 */
function initProfileModal() {
    const changeBtn = document.getElementById("changePassBtn");
    const passFields = document.getElementById("passwordFields");
    const profileInfo = document.querySelector(".profile-info");
    const cancelBtn = document.getElementById("cancelPassBtn");

    if (changeBtn && passFields && profileInfo) {
        changeBtn.addEventListener("click", function () {
            passFields.style.display = "block";
            profileInfo.style.display = "none";
            changeBtn.style.display = "none";
        });
    }

    if (cancelBtn) {
        cancelBtn.addEventListener("click", function () {
            resetProfileModal();
        });
    }

    document.querySelectorAll(".password-toggle").forEach(icon => {
        icon.addEventListener("click", () => {
            const targetId = icon.getAttribute("data-target");
            const input = document.getElementById(targetId);
            if (!input) return;
            if (input.type === "password") {
                input.type = "text";
                icon.classList.remove("bi-eye-slash");
                icon.classList.add("bi-eye");
            } else {
                input.type = "password";
                icon.classList.remove("bi-eye");
                icon.classList.add("bi-eye-slash");
            }
        });
    });
}

/**
 * 1.2 Reset Profile Password Modal Fields
 */
function resetProfileModal() {
    const passFields = document.getElementById("passwordFields");
    const profileInfo = document.querySelector(".profile-info");
    const changeBtn = document.getElementById("changePassBtn");
    if (passFields) passFields.style.display = "none";
    if (profileInfo) profileInfo.style.display = "block";
    if (changeBtn) changeBtn.style.display = "block";

    const np = document.getElementById("newPass");
    const cp = document.getElementById("confirmPass");
    if (np) np.value = "";
    if (cp) cp.value = "";
}

/**
 * 1.3 Dynamic Copyright Year Setup
 */
function initDynamicYear() {
    const yearElem = document.getElementById("year");
    if (yearElem) {
        yearElem.textContent = new Date().getFullYear();
    }
}

/**
 * 1.4 Sidebar Treeview Helper
 * AdminLTE v3 treeview handles all levels of nested dropdowns and animations natively.
 */
function initSidebarMultiLevel() {
    if (typeof $ === 'undefined') return;
    if ($.fn.Treeview) {
        $('[data-widget="treeview"]').each(function () {
            if (!$(this).data('lte.treeview')) {
                $(this).Treeview('init');
            }
        });
    }
}


/* ==========================================================================
   2. DLE DASHBOARD SPECIFIC SCRIPTS
   ========================================================================== */

/**
 * 2.1 State Donut Chart & District Spline Area Chart Setup
 */
function initDleDashboardCharts() {
    if (typeof Chart === 'undefined') return;

    // 2.1.1 Donut Chart (DLE State Wise - Harmonized Blue Spectrum)
    const donutCtx = document.getElementById('stateDonutChart');
    if (donutCtx) {
        new Chart(donutCtx, {
            type: 'doughnut',
            data: {
                labels: ['Bihar', 'Chhattisgarh', 'Jharkhand', 'Madhya Pradesh', 'Rajasthan', 'Uttarakhand', 'Uttar Pradesh'],
                datasets: [{
                    data: [28, 16, 12, 11, 10, 9, 8],
                    backgroundColor: [
                        '#2563eb',
                        '#0284c7',
                        '#06b6d4',
                        '#4f46e5',
                        '#f59e0b',
                        '#10b981',
                        '#8b5cf6'
                    ],
                    borderWidth: 2,
                    borderColor: '#ffffff',
                    hoverOffset: 6
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                cutout: '72%',
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        backgroundColor: '#0b1f48',
                        titleFont: { size: 12, family: 'Plus Jakarta Sans', weight: 'bold' },
                        bodyFont: { size: 12, family: 'Plus Jakarta Sans' },
                        padding: 10,
                        cornerRadius: 8,
                        callbacks: {
                            label: function (context) {
                                const label = context.label || '';
                                const value = context.parsed || 0;
                                const total = context.dataset.data.reduce((a, b) => a + b, 0);
                                const pct = ((value / total) * 100).toFixed(1);
                                return ` ${label}: ${value} (${pct}%)`;
                            }
                        }
                    }
                }
            }
        });
    }

    // 2.1.2 Spline Area Chart (District Wise Active DLE - Dynamic State Filtering)
    const splineCtx = document.getElementById('districtSplineChart');
    if (splineCtx) {
        const ctx = splineCtx.getContext('2d');
        const gradient = ctx.createLinearGradient(0, 0, 0, 220);
        gradient.addColorStop(0, 'rgba(37, 99, 235, 0.28)');
        gradient.addColorStop(1, 'rgba(37, 99, 235, 0.01)');

        // State-wise District Data Dictionary
        const districtDataByState = {
            'All States': {
                labels: ['Patna', 'Moradabad', 'Raipur', 'Ranchi', 'Bhopal', 'Jaipur', 'Dehradun'],
                data: [10, 8, 7, 6, 5, 5, 4],
                subtitle: 'Overview across top state districts'
            },
            'Bihar': {
                labels: ['Patna', 'Gaya', 'Muzaffarpur', 'Vaishali', 'Bhagalpur', 'Nalanda', 'Purnea'],
                data: [10, 5, 4, 3, 3, 2, 1],
                subtitle: 'Bihar: 28 Active DLEs across 7 districts'
            },
            'Uttar Pradesh': {
                labels: ['Moradabad', 'Lucknow', 'Deoria', 'Pilibhit', 'Bareilly', 'Varanasi', 'Etah'],
                data: [2, 2, 1, 1, 1, 1, 0],
                subtitle: 'Uttar Pradesh: 8 Active DLEs across 7 districts'
            },
            'Chhattisgarh': {
                labels: ['Raipur', 'Bilaspur', 'Durg', 'Bhilai', 'Korba', 'Rajnandgaon', 'Jagdalpur'],
                data: [5, 4, 3, 2, 1, 1, 0],
                subtitle: 'Chhattisgarh: 16 Active DLEs across 7 districts'
            },
            'Jharkhand': {
                labels: ['Ranchi', 'Dhanbad', 'Bokaro', 'Jamshedpur', 'Deoghar', 'Hazaribagh', 'Giridih'],
                data: [4, 3, 2, 1, 1, 1, 0],
                subtitle: 'Jharkhand: 12 Active DLEs across 7 districts'
            },
            'Madhya Pradesh': {
                labels: ['Bhopal', 'Indore', 'Jabalpur', 'Gwalior', 'Ujjain', 'Sagar', 'Rewa'],
                data: [3, 3, 2, 1, 1, 1, 0],
                subtitle: 'Madhya Pradesh: 11 Active DLEs across 7 districts'
            },
            'Rajasthan': {
                labels: ['Jaipur', 'Jodhpur', 'Kota', 'Bikaner', 'Ajmer', 'Udaipur', 'Alwar'],
                data: [3, 2, 2, 1, 1, 1, 0],
                subtitle: 'Rajasthan: 10 Active DLEs across 7 districts'
            },
            'Uttarakhand': {
                labels: ['Dehradun', 'Haridwar', 'Nainital', 'Roorkee', 'Haldwani', 'Almora', 'Rudrapur'],
                data: [3, 2, 1, 1, 1, 1, 0],
                subtitle: 'Uttarakhand: 9 Active DLEs across 7 districts'
            }
        };

        const stateSelect = document.getElementById('districtStateSelect');
        const subtitleElem = document.getElementById('districtChartSubtitle');
        const defaultState = (stateSelect && stateSelect.value) ? stateSelect.value : 'Bihar';
        const initialInfo = districtDataByState[defaultState] || districtDataByState['Bihar'];

        if (subtitleElem) {
            subtitleElem.textContent = initialInfo.subtitle;
        }

        const districtChart = new Chart(splineCtx, {
            type: 'line',
            data: {
                labels: initialInfo.labels,
                datasets: [{
                    label: 'Active DLE',
                    data: initialInfo.data,
                    borderColor: '#2563eb',
                    backgroundColor: gradient,
                    borderWidth: 2.5,
                    fill: true,
                    tension: 0.42,
                    pointBackgroundColor: '#2563eb',
                    pointBorderColor: '#ffffff',
                    pointBorderWidth: 2,
                    pointRadius: 4.5,
                    pointHoverRadius: 7
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 1,
                            precision: 0,
                            font: { size: 11, family: 'Plus Jakarta Sans', weight: '600' },
                            color: '#94a3b8'
                        },
                        grid: {
                            color: '#f1f5f9',
                            drawBorder: false
                        }
                    },
                    x: {
                        ticks: {
                            font: { size: 11, family: 'Plus Jakarta Sans', weight: '500' },
                            color: '#64748b'
                        },
                        grid: {
                            display: false,
                            drawBorder: false
                        }
                    }
                },
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        backgroundColor: '#0b1f48',
                        titleColor: '#ffffff',
                        bodyColor: '#ffffff',
                        titleFont: { size: 11, family: 'Plus Jakarta Sans' },
                        bodyFont: { size: 12, family: 'Plus Jakarta Sans', weight: 'bold' },
                        padding: 10,
                        cornerRadius: 8,
                        displayColors: false,
                        callbacks: {
                            title: function (items) {
                                return items[0]?.label || '';
                            },
                            label: function (context) {
                                return `Active DLE : ${context.parsed.y}`;
                            }
                        }
                    }
                }
            }
        });

        if (stateSelect) {
            stateSelect.addEventListener('change', function () {
                const selectedState = this.value;
                const stateInfo = districtDataByState[selectedState] || districtDataByState['All States'];

                districtChart.data.labels = stateInfo.labels;
                districtChart.data.datasets[0].data = stateInfo.data;
                districtChart.update();

                if (subtitleElem) {
                    subtitleElem.textContent = stateInfo.subtitle;
                }
            });
        }
    }
}


/* ==========================================================================
   3. DLE REGISTRATION FORM SPECIFIC SCRIPTS
   ========================================================================== */

/**
 * 3.1 Custom Select Dropdowns, Live Summary Synchronization, Dropzones, Reset & Submit
 */
function initDleRegistrationForm() {
    if (typeof $ === 'undefined') return;
    const form = $('#dleRegistrationForm');
    if (!form.length) return;

    // 3.1.1 Toggle dropdown on button click
    $('.custom-select-box .custom-dropdown-btn').off('click').on('click', function (e) {
        e.stopPropagation();
        const parentBox = $(this).closest('.custom-select-box');
        const wasActive = parentBox.hasClass('is-active');

        // Close all open dropdowns
        $('.custom-select-box').removeClass('is-active');

        if (!wasActive) {
            parentBox.addClass('is-active');
        }
    });

    // 3.1.2 Handle custom dropdown option selection
    $('.custom-dropdown-option').off('click').on('click', function (e) {
        e.stopPropagation();
        const option = $(this);
        const val = option.attr('data-value');
        const box = option.closest('.custom-select-box');
        const nativeSelect = box.find('select');
        const triggerText = box.find('.dropdown-btn-text');

        // Mark selected option
        box.find('.custom-dropdown-option').removeClass('is-selected');
        option.addClass('is-selected');

        // Update trigger text
        triggerText.text(val).removeClass('is-placeholder');

        // Update Status dot if it's the Status dropdown
        if (box.attr('id') === 'statusSelectBox') {
            const dot = box.find('#statusTriggerDot');
            if (val === 'Active') {
                dot.attr('class', 'status-badge-dot dot-green');
            } else if (val === 'Pending') {
                dot.attr('class', 'status-badge-dot dot-amber');
            } else {
                dot.attr('class', 'status-badge-dot dot-slate');
            }
        }

        // Update hidden native select and trigger change event
        nativeSelect.val(val).trigger('change');

        // Close dropdown
        box.removeClass('is-active');
    });

    // 3.1.3 Close when clicking outside
    $(document).off('click.customSelect').on('click.customSelect', function (e) {
        if (!$(e.target).closest('.custom-select-box').length) {
            $('.custom-select-box').removeClass('is-active');
        }
    });

    // 3.1.4 Close on ESC key
    $(document).off('keydown.customSelect').on('keydown.customSelect', function (e) {
        if (e.key === 'Escape') {
            $('.custom-select-box').removeClass('is-active');
        }
    });

    // 3.2 Live synchronization with Summary Card
    $('#districtSelect').off('change').on('change', function () {
        const val = $(this).val();
        $('#sumDistrict').text(val ? val : 'Select District').css('color', val ? '#0f172a' : '#64748b');
    });

    $('#blockSelect').off('change').on('change', function () {
        const val = $(this).val();
        $('#sumBlock').text(val ? val : 'Select Block').css('color', val ? '#0f172a' : '#64748b');
    });

    $('#panchayatSelect').off('change').on('change', function () {
        const val = $(this).val();
        $('#sumPanchayat').text(val ? val : 'Select Panchayat').css('color', val ? '#0f172a' : '#64748b');
    });

    // Auto-format MM/YYYY
    $('#monthYearInput').off('input').on('input', function () {
        let val = $(this).val().replace(/[^\d]/g, '');
        if (val.length >= 2) {
            val = val.substring(0, 2) + '/' + val.substring(2, 6);
        }
        $(this).val(val);
        $('#sumMonthYear').text(val ? val : 'MM/YYYY').css('color', val ? '#0f172a' : '#64748b');
    });

    // Status badge color sync
    $('#statusSelect').off('change').on('change', function () {
        const val = $(this).val();
        $('#sumStatus').text(val);
        if (val === 'Active') {
            $('#sumStatus').css({ 'background': '#ecfdf5', 'color': '#059669', 'border-color': '#a7f3d0' });
        } else if (val === 'Pending') {
            $('#sumStatus').css({ 'background': '#fffbeb', 'color': '#d97706', 'border-color': '#fde68a' });
        } else {
            $('#sumStatus').css({ 'background': '#f1f5f9', 'color': '#475569', 'border-color': '#cbd5e1' });
        }
    });

    // 3.3 AMC & Invoice & Image File Upload Listeners
    $('#amcFileInput').off('change').on('change', function () {
        if (this.files && this.files[0]) {
            const fileName = this.files[0].name;
            $('#amcFileName').text(fileName);
            $('#amcFileBadge').css('display', 'inline-flex');
        }
    });

    $('#invoiceFileInput').off('change').on('change', function () {
        if (this.files && this.files[0]) {
            const fileName = this.files[0].name;
            $('#invoiceFileName').text(fileName);
            $('#invoiceFileBadge').css('display', 'inline-flex');
        }
    });

    $('#imageUploadInput').off('change').on('change', function () {
        if (this.files && this.files[0]) {
            $('#imageChosenText').text(this.files[0].name).css('color', '#2563eb');
        } else {
            $('#imageChosenText').text('No file chosen').css('color', '#64748b');
        }
    });

    // 3.4 Drag and Drop Support for Dropzones
    ['amcDropzone', 'invoiceDropzone'].forEach(function (zoneId) {
        const zone = document.getElementById(zoneId);
        if (!zone) return;
        const inputId = zoneId === 'amcDropzone' ? 'amcFileInput' : 'invoiceFileInput';

        ['dragenter', 'dragover'].forEach(eventName => {
            zone.addEventListener(eventName, function (e) {
                e.preventDefault();
                e.stopPropagation();
                zone.classList.add('dragover');
            }, false);
        });

        ['dragleave', 'drop'].forEach(eventName => {
            zone.addEventListener(eventName, function (e) {
                e.preventDefault();
                e.stopPropagation();
                zone.classList.remove('dragover');
            }, false);
        });

        zone.addEventListener('drop', function (e) {
            const dt = e.dataTransfer;
            const files = dt ? dt.files : null;
            if (files && files.length > 0) {
                const fileInput = document.getElementById(inputId);
                if (fileInput) {
                    fileInput.files = files;
                    $(fileInput).trigger('change');
                }
            }
        }, false);
    });

    // 3.5 Reset Button (resets form, custom dropdowns, badges & summary)
    $('#resetFormBtn').off('click').on('click', function () {
        if (confirm('Are you sure you want to reset the form?')) {
            $('#dleRegistrationForm')[0].reset();

            // Reset District
            $('#districtSelectBox').find('.dropdown-btn-text').text('Choose District').addClass('is-placeholder');
            $('#districtSelectBox').find('.custom-dropdown-option').removeClass('is-selected');

            // Reset Block
            $('#blockSelectBox').find('.dropdown-btn-text').text('Choose Block').addClass('is-placeholder');
            $('#blockSelectBox').find('.custom-dropdown-option').removeClass('is-selected');

            // Reset Panchayat
            $('#panchayatSelectBox').find('.dropdown-btn-text').text('Choose Panchayat').addClass('is-placeholder');
            $('#panchayatSelectBox').find('.custom-dropdown-option').removeClass('is-selected');

            // Reset Status
            $('#statusSelectBox').find('#statusTriggerText').text('Active').removeClass('is-placeholder');
            $('#statusSelectBox').find('#statusTriggerDot').attr('class', 'status-badge-dot dot-green');
            $('#statusSelectBox').find('.custom-dropdown-option').removeClass('is-selected');
            $('#statusSelectBox').find('.custom-dropdown-option[data-value="Active"]').addClass('is-selected');
            $('#statusSelect').val('Active').trigger('change');

            // Reset badges & summary
            $('#amcFileBadge').hide();
            $('#invoiceFileBadge').hide();
            $('#imageChosenText').text('No file chosen').css('color', '#64748b');
            $('#sumDistrict').text('Select District').css('color', '#64748b');
            $('#sumBlock').text('Select Block').css('color', '#64748b');
            $('#sumPanchayat').text('Select Panchayat').css('color', '#64748b');
            $('#sumMonthYear').text('MM/YYYY').css('color', '#64748b');
        }
    });

    // 3.6 Form Submit Handler
    $('#dleRegistrationForm').off('submit').on('submit', function (e) {
        e.preventDefault();
        const district = $('#districtSelect').val();
        const block = $('#blockSelect').val();
        const panchayat = $('#panchayatSelect').val();
        const monthYear = $('#monthYearInput').val();
        const uid = $('#uidInput').val();

        if (!district || !block || !panchayat || !monthYear || !uid) {
            alert('Please fill in all mandatory fields marked with *');
            return;
        }

        alert('✓ DLE Record successfully created!\n\nDistrict: ' + district + '\nBlock: ' + block + '\nPanchayat: ' + panchayat + '\nUID: ' + uid);
    });
}


/* ==========================================================================
   4. DLE USER DIRECTORY TABLE SPECIFIC SCRIPTS
   ========================================================================== */

// 4.0 Register custom DataTables search filter for State, Approval, and Status dropdowns
if (typeof $ !== 'undefined' && $.fn && $.fn.dataTable && !$.fn.dataTable.ext.search._dleFilterRegistered) {
    $.fn.dataTable.ext.search.push(function (settings, data, dataIndex, rowData, counter) {
        if (settings.sTableId !== 'example1') return true;

        const stateFilter = (document.getElementById('filterState')?.value || '').trim();
        const approvalFilter = (document.getElementById('filterApproval')?.value || '').trim();
        const statusFilter = (document.getElementById('filterStatus')?.value || '').trim();

        // data[1] = State, data[12] = Approval Status, data[13] = Status
        const stateText = (data[1] || '').trim();
        const approvalText = (data[12] || '').trim();
        const statusText = (data[13] || '').trim();

        if (stateFilter && !stateText.toLowerCase().includes(stateFilter.toLowerCase())) {
            return false;
        }
        if (approvalFilter && !approvalText.toLowerCase().includes(approvalFilter.toLowerCase())) {
            return false;
        }
        if (statusFilter && !statusText.toLowerCase().includes(statusFilter.toLowerCase())) {
            return false;
        }
        return true;
    });
    $.fn.dataTable.ext.search._dleFilterRegistered = true;
}

/**
 * 4.1 Initialize AdminLTE Theme DataTables with Export Buttons & Theme Pagination
 */
function initDleUserTable() {
    if (typeof $ === 'undefined' || !$.fn.DataTable) return;
    const tableEl = $('#example1');
    if (!tableEl.length) return;

    if (!$.fn.DataTable.isDataTable('#example1')) {
        const table = tableEl.DataTable({
            responsive: false,
            scrollX: true,
            scrollCollapse: true,
            lengthChange: false,
            autoWidth: false,
            buttons: [
                {
                    extend: 'copy',
                    text: '<i class="fas fa-copy me-1 mr-1 text-secondary"></i> '
                },
                {
                    extend: 'csv',
                    text: '<i class="fas fa-file-csv me-1 mr-1 text-info"></i> '
                },
                {
                    extend: 'excel',
                    text: '<i class="fas fa-file-excel me-1 mr-1 text-success"></i> '
                },
                {
                    extend: 'pdf',
                    text: '<i class="fas fa-file-pdf me-1 mr-1 text-danger"></i> '
                },
                {
                    extend: 'print',
                    text: '<i class="fas fa-print me-1 mr-1 text-primary"></i> '
                },
                {
                    extend: 'colvis',
                    text: '<i class="fas fa-columns me-1 mr-1 text-muted"></i> Column visibility'
                }
            ],
            columnDefs: [
                { orderable: false, targets: [11, 15] } // Non-sortable for Documents and Action columns
            ]
        });

        // Append theme export buttons container to top row
        table.buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        // Synchronize record badge counter on every table draw/filter & adjust column widths
        table.on('draw', function () {
            const info = table.page.info();
            const badge = document.getElementById('visibleCountBadge');
            if (badge) {
                badge.innerHTML = `<i class="bi bi-circle-fill text-success" style="font-size: 7px;"></i> ${info.recordsDisplay} Records`;
            }
            table.columns.adjust();
        });

        // Adjust column alignment after initial render and on resize
        setTimeout(function () {
            table.columns.adjust();
        }, 150);

        $(window).on('resize', function () {
            table.columns.adjust();
        });
    }
}

/**
 * 4.2 Real-Time Filter & Search Function for User Directory Table
 */
function filterDleTable() {
    if (typeof $ !== 'undefined' && $.fn.DataTable && $.fn.DataTable.isDataTable('#example1')) {
        const table = $('#example1').DataTable();
        const searchInput = document.getElementById('dleUserSearch');
        const query = (searchInput?.value || '').trim();
        table.search(query).draw();
        return;
    }

    // Fallback if DataTables is not yet active
    const searchInput = document.getElementById('dleUserSearch');
    const query = (searchInput?.value || '').toLowerCase().trim();
    const stateFilter = document.getElementById('filterState')?.value || '';
    const approvalFilter = document.getElementById('filterApproval')?.value || '';
    const statusFilter = document.getElementById('filterStatus')?.value || '';

    const tbody = document.getElementById('dleTableBody');
    if (!tbody) return;
    const rows = tbody.querySelectorAll('tr');
    let visibleCount = 0;

    rows.forEach(row => {
        const rowText = row.innerText.toLowerCase();
        const rowState = row.getAttribute('data-state') || '';
        const rowApproval = row.getAttribute('data-approval') || '';
        const rowStatus = row.getAttribute('data-status') || '';

        const matchesQuery = !query || rowText.includes(query);
        const matchesState = !stateFilter || rowState === stateFilter;
        const matchesApproval = !approvalFilter || rowApproval === approvalFilter;
        const matchesStatus = !statusFilter || rowStatus === statusFilter;

        if (matchesQuery && matchesState && matchesApproval && matchesStatus) {
            row.style.display = '';
            visibleCount++;
        } else {
            row.style.display = 'none';
        }
    });

    // Update visible badge & counter
    const badge = document.getElementById('visibleCountBadge');
    const counter = document.getElementById('visibleRowsCount');
    if (badge) badge.textContent = `${visibleCount} Records`;
    if (counter) counter.textContent = `1 to ${visibleCount}`;
}

/**
 * 4.3 Reset All Table Filters and Search
 */
function resetDleFilters() {
    const search = document.getElementById('dleUserSearch');
    const state = document.getElementById('filterState');
    const app = document.getElementById('filterApproval');
    const st = document.getElementById('filterStatus');
    if (search) search.value = '';
    if (state) state.value = '';
    if (app) app.value = '';
    if (st) st.value = '';

    if (typeof $ !== 'undefined' && $.fn.DataTable && $.fn.DataTable.isDataTable('#example1')) {
        const table = $('#example1').DataTable();
        table.search('').columns().search('').draw();
    } else {
        filterDleTable();
    }
}

/**
 * 4.4 Quick State Filter from Sidebar or External Link
 */
function filterByState(stateName) {
    const state = document.getElementById('filterState');
    if (state) {
        state.value = stateName;
    }
    filterDleTable();
}

/**
 * 4.4a Quick Status Filter from Sidebar or External Link
 */
function filterByStatus(statusVal) {
    const statusSelect = document.getElementById('filterStatus');
    if (statusSelect) {
        statusSelect.value = statusVal;
    }
    filterDleTable();
}

/**
 * 4.4b Quick Approval Filter from Sidebar or External Link
 */
function filterByApproval(approvalVal) {
    const approvalSelect = document.getElementById('filterApproval');
    if (approvalSelect) {
        approvalSelect.value = approvalVal;
    }
    filterDleTable();
}

/**
 * 4.5 Open Documents Modal with User Details
 */
function openDocModal(name, district, state) {
    const title = document.getElementById('docModalUserTitle');
    const sub = document.getElementById('docModalSubtitle');
    if (title) title.innerText = `${name} — Documents`;
    if (sub) sub.innerText = `Location: ${district}, ${state} • KYC & Police Verification Files`;
    if (typeof $ !== 'undefined' && $('#docModal').length) {
        $('#docModal').modal('show');
    }
}

/**
 * 4.5 Open User Profile Modal with Dynamic Data
 */
function openProfileModal(name, email, contact, district, state, approval, status) {
    const isApproved = approval === 'Approved';
    const isActive = status === 'Active';

    const initials = name.split(' ').map(n => n[0]).join('').substring(0, 2).toUpperCase();
    const html = `
        <div class="d-flex align-items-center gap-3 p-3 bg-light rounded-3 mb-3 border">
            <div class="user-avatar-circle avatar-blue" style="width: 48px; height: 48px; font-size: 16px;">
                ${initials}
            </div>
            <div>
                <h5 class="mb-1 fw-bold text-dark">${name}</h5>
                <div class="d-flex align-items-center gap-2">
                    <span class="badge ${isApproved ? 'bg-success' : 'bg-warning'} text-white">${approval}</span>
                    <span class="badge ${isActive ? 'bg-success' : 'bg-secondary'} text-white">${status}</span>
                    <span class="text-muted small"><i class="bi bi-shield-check text-success"></i> Police Verified</span>
                </div>
            </div>
        </div>

        <div class="row g-2 small">
            <div class="col-6">
                <span class="text-muted d-block">Email Address</span>
                <strong class="text-dark">${email}</strong>
            </div>
            <div class="col-6">
                <span class="text-muted d-block">Primary Contact</span>
                <strong class="text-dark font-monospace">${contact}</strong>
            </div>
            <div class="col-6 mt-2">
                <span class="text-muted d-block">District / State</span>
                <strong class="text-dark">${district}, ${state}</strong>
            </div>
            <div class="col-6 mt-2">
                <span class="text-muted d-block">Registered Date</span>
                <strong class="text-dark">16 Sep 2026</strong>
            </div>
        </div>
    `;

    const body = document.getElementById('userProfileBody');
    if (body) body.innerHTML = html;
    if (typeof $ !== 'undefined' && $('#userProfileModal').length) {
        $('#userProfileModal').modal('show');
    }
}

/**
 * 4.6 Approve Row Action
 */
function approveRow(el) {
    const tr = el ? el.closest('tr') : null;
    if (!tr) return;

    tr.setAttribute('data-approval', 'Approved');
    tr.setAttribute('data-status', 'Active');

    // Update Approval Cell
    const appCell = tr.children[12];
    if (appCell) {
        appCell.innerHTML = `<span class="badge-app-approved"><i class="bi bi-patch-check-fill"></i> Approved</span>`;
    }

    // Update Status Cell
    const statusCell = tr.children[13];
    if (statusCell) {
        statusCell.innerHTML = `<span class="status-dot-pill status-active"><span class="dot-green"></span> Active</span>`;
    }

    if (typeof $ !== 'undefined' && $.fn.DataTable && $.fn.DataTable.isDataTable('#example1')) {
        const table = $('#example1').DataTable();
        table.rows().invalidate().draw(false);
    }

    alert('DLE User approved and marked Active!');
    updateCounts();
}

/**
 * 4.7 Update Metric Counter Cards
 */
function updateCounts() {
    const tbody = document.getElementById('dleTableBody');
    if (!tbody) return;
    const rows = tbody.querySelectorAll('tr');
    let approved = 0;
    let pending = 0;

    rows.forEach(r => {
        if (r.getAttribute('data-approval') === 'Approved') approved++;
        if (r.getAttribute('data-approval') === 'Pending') pending++;
    });

    const apprElem = document.getElementById('countApproved');
    const pendElem = document.getElementById('countPending');
    if (apprElem) apprElem.textContent = approved;
    if (pendElem) pendElem.textContent = pending;
}

/**
 * 4.8 Add New DLE User from Modal Form
 */
function submitNewDle() {
    const stateElem = document.getElementById('inpState');
    const nameElem = document.getElementById('inpName');
    const emailElem = document.getElementById('inpEmail');
    const contactElem = document.getElementById('inpContact');
    const emergencyElem = document.getElementById('inpEmergency');
    const districtElem = document.getElementById('inpDistrict');
    const blockElem = document.getElementById('inpBlock');
    const panchayatElem = document.getElementById('inpPanchayat');
    const addressElem = document.getElementById('inpAddress');
    const policeElem = document.getElementById('inpPolice');

    if (!nameElem || !stateElem || !districtElem) return;

    const state = stateElem.value;
    const name = nameElem.value;
    const email = emailElem ? emailElem.value : '';
    const contact = contactElem ? contactElem.value : '';
    const emergency = emergencyElem ? emergencyElem.value : '';
    const district = districtElem.value.toUpperCase();
    const block = blockElem ? blockElem.value : '';
    const panchayat = panchayatElem ? panchayatElem.value : '';
    const address = addressElem ? addressElem.value : '';
    const police = policeElem ? policeElem.value : 'Pending';

    const tbody = document.getElementById('dleTableBody');
    if (!tbody) return;
    const rowCount = tbody.querySelectorAll('tr').length + 1;

    const initials = name.split(' ').map(n => n[0]).join('').substring(0, 2).toUpperCase();
    const stateClass = state === 'Bihar' ? 'state-bihar' : 'state-up';

    const newRow = document.createElement('tr');
    newRow.setAttribute('data-state', state);
    newRow.setAttribute('data-approval', 'Pending');
    newRow.setAttribute('data-status', 'Inactive');

    const padCount = rowCount < 10 ? `0${rowCount}` : rowCount;
    newRow.innerHTML = `
        <td class="text-center"><span class="sr-badge">#${padCount}</span></td>
        <td><span class="state-pill ${stateClass}"><i class="bi bi-geo-alt-fill"></i> ${state}</span></td>
        <td>
            <div class="user-identity-cell">
                <div class="user-avatar-circle avatar-blue">${initials}</div>
                <div>
                    <div class="user-name-text">${name}</div>
                    <span class="user-id-chip"><i class="bi bi-person-badge"></i> DLE-NEW</span>
                </div>
            </div>
        </td>
        <td><a href="mailto:${email}" class="table-email-link" title="${email}"><i class="bi bi-envelope text-primary"></i><span>${email}</span></a></td>
        <td><a href="tel:${contact}" class="contact-link-primary" title="Call contact"><i class="bi bi-telephone-fill text-success"></i> +91 ${contact}</a></td>
        <td><a href="tel:${emergency}" class="contact-link-emergency" title="Emergency"><i class="bi bi-telephone-plus-fill text-danger"></i> +91 ${emergency}</a></td>
        <td><span class="district-chip">${district}</span></td>
        <td><span class="block-text"><i class="bi bi-building me-1 text-muted"></i>${block}</span></td>
        <td><span class="panchayat-text"><i class="bi bi-geo-alt me-1 text-muted"></i>${panchayat}</span></td>
        <td><div class="address-box" title="${address}"><i class="bi bi-pin-map text-primary"></i><span>${address}</span></div></td>
        <td class="text-center"><span class="badge-verified"><i class="bi bi-shield-fill-check"></i> ${police}</span></td>
        <td class="text-center"><button class="btn-view-doc" onclick="openDocModal('${name}', '${district}', '${state}')"><i class="bi bi-file-earmark-pdf-fill text-danger"></i> <span>Docs</span> <i class="bi bi-eye ms-1 text-muted"></i></button></td>
        <td class="text-center"><span class="badge-app-pending"><i class="bi bi-clock-history"></i> Pending</span></td>
        <td class="text-center"><span class="status-dot-pill status-inactive"><span class="dot-red"></span> Inactive</span></td>
        <td class="text-center"><span class="date-chip"><i class="bi bi-calendar3"></i> Today</span></td>
        <td class="text-center">
            <div class="action-cell justify-content-center">
                <button class="btn-tbl-action" title="View Full Profile" onclick="openProfileModal('${name}', '${email}', '${contact}', '${district}', '${state}', 'Pending', 'Inactive')"><i class="bi bi-eye"></i></button>
                <button class="btn-tbl-action action-edit" title="Edit User"><i class="bi bi-pencil"></i></button>
            </div>
        </td>
    `;

    if (typeof $ !== 'undefined' && $.fn.DataTable && $.fn.DataTable.isDataTable('#example1')) {
        const table = $('#example1').DataTable();
        table.row.add($(newRow)).draw(false);
    } else {
        tbody.appendChild(newRow);
    }

    if (typeof $ !== 'undefined' && $('#addDleModal').length) {
        $('#addDleModal').modal('hide');
    }
    const newForm = document.getElementById('newDleForm');
    if (newForm) newForm.reset();
    alert(`DLE User "${name}" added successfully!`);

    const countTot = document.getElementById('countTotal');
    if (countTot) countTot.textContent = rowCount;
    filterDleTable();
}

/**
 * 4.9 Export HTML Table to CSV File (Triggers DataTables CSV button or falls back to DOM export)
 */
function exportTableToCSV(tableId, filename) {
    if (typeof $ !== 'undefined' && $.fn.DataTable && $.fn.DataTable.isDataTable('#' + tableId)) {
        const table = $('#' + tableId).DataTable();
        const csvBtn = table.button('.buttons-csv');
        if (csvBtn && csvBtn.length) {
            csvBtn.trigger();
            return;
        }
    }

    const table = document.getElementById(tableId);
    if (!table) return;
    let csv = [];
    const rows = table.querySelectorAll('tr');

    rows.forEach(row => {
        if (row.style.display === 'none') return;
        let rowData = [];
        const cols = row.querySelectorAll('th, td');
        // Skip the last column (Action column)
        for (let i = 0; i < cols.length - 1; i++) {
            let text = cols[i].innerText.replace(/(\r\n|\n|\r)/gm, ' ').replace(/\s+/g, ' ').trim();
            rowData.push('"' + text.replace(/"/g, '""') + '"');
        }
        if (rowData.length > 0) csv.push(rowData.join(','));
    });

    const csvContent = 'data:text/csv;charset=utf-8,' + encodeURIComponent(csv.join('\n'));
    const link = document.createElement('a');
    link.setAttribute('href', csvContent);
    link.setAttribute('download', filename);
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
}


/* ==========================================================================
   GLOBAL SCOPE ATTACHMENTS & MASTER INITIALIZER
   ========================================================================== */

// Attach table action and modal functions to window for inline HTML onclick handlers
window.initSidebarMultiLevel = initSidebarMultiLevel;
window.initDleUserTable = initDleUserTable;
window.filterDleTable = filterDleTable;
window.resetDleFilters = resetDleFilters;
window.filterByState = filterByState;
window.filterByStatus = filterByStatus;
window.filterByApproval = filterByApproval;
window.openDocModal = openDocModal;
window.openProfileModal = openProfileModal;
window.approveRow = approveRow;
window.updateCounts = updateCounts;
window.submitNewDle = submitNewDle;
window.exportTableToCSV = exportTableToCSV;
window.resetProfileModal = resetProfileModal;

/**
 * Master Initialization: Runs components based on presence in the active DOM
 */
function initDleMaster() {
    initDynamicYear();
    initProfileModal();
    initSidebarMultiLevel();
    initDleDashboardCharts();
    initDleRegistrationForm();
    initDleUserTable();
}

// Bind initialization to DOM ready events
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initDleMaster);
} else {
    initDleMaster();
}

// Fallback initialization with jQuery
if (typeof $ !== 'undefined') {
    $(document).ready(function () {
        initDleMaster();
    });
}
