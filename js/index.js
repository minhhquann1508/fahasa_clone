const notifications = document.querySelector(".custom-notifications"); // Ensure this container exists in your HTML

const toastDetails = {
    timer: 5000,
    success: { icon: 'fa-circle-check', text: 'Success: This is a success toast.' },
    error: { icon: 'fa-circle-xmark', text: 'Error: This is an error toast.' },
    warning: { icon: 'fa-triangle-exclamation', text: 'Warning: This is a warning toast.' },
    info: { icon: 'fa-circle-info', text: 'Info: This is an information toast.' }
};

const removeToast = (toast) => {
    toast.classList.add("hide");
    if (toast.timeoutId) clearTimeout(toast.timeoutId);
    setTimeout(() => toast.remove(), 300);
};

const createToast = (type, customMessage = null) => {
    if (!toastDetails[type]) {
        console.error(`Toast type "${type}" is not defined.`);
        return;
    }
    const { icon, text } = toastDetails[type];
    const message = customMessage || text;
    const toast = document.createElement("li");
    toast.className = `custom-toast ${type}`;
    toast.innerHTML = `<div class="custom-column">
                         <i class="fa-solid ${icon}"></i>
                         <span>${message}</span>
                      </div>
                      <i class="fa-solid fa-xmark" onclick="removeToast(this.parentElement)"></i>`;
    notifications.appendChild(toast);
    toast.timeoutId = setTimeout(() => removeToast(toast), toastDetails.timer);
};