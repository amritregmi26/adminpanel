(function(d)
{
    let modalBody = d.querySelector("#editModal .modal-body"),
        modalForm = d.querySelector('#editModal form');
        mainContainer = d.querySelectorAll(".detail-wrapper"),
        editBtn = d.querySelectorAll('.detail-wrapper .action-btns .main-content button:first-child');

    let label = document.createElement('label');
    let input = document.createElement('input');
    for(let i = 0; i < mainContainer.length; i++)
    {
        editBtn[i].addEventListener('click', () => {

        label.innerHTML = editBtn[i].parentNode.parentNode.parentNode.firstElementChild.firstElementChild.innerHTML;
        label.classList.add('text-capitalize');
        label.classList.add('fw-bold');
        label.classList.add('mb-2');
        modalForm.appendChild(label);

        input.value = editBtn[i].parentNode.parentNode.parentNode.firstElementChild.mainText[i].firstElementChild.innerHTML;
        input.type = 'text'
        input.classList.add('form-control');
        modalForm.appendChild(input);
    });
}
    
}) (document);