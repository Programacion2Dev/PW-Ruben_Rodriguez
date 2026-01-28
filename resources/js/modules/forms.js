// Manejo de formularios médicos
export function initMedicalForms() {
    const forms = document.querySelectorAll('.medical-form');
    
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Validación personalizada
            if (validateMedicalForm(this)) {
                this.submit();
            }
        });
    });
}

function validateMedicalForm(form) {
    // Validaciones específicas para formularios médicos
    return true;
}

// Inicializar cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', initMedicalForms);