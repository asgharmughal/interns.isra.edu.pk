@if('Teaching Staff' =='Teaching Staff')
<select class="custom-select w-100" id="hoposition" name="hoposition">
    <option value="">Choose...</option>
    <option value="Principal"> Principal </option>
    <option value="Section Head"> Section Head </option>
    <option value="Coordinator"> Coordinator </option>
    <option value="Senior Teacher"> Senior Teacher </option>
    <option value="Teacher"> Teacher </option>
</select>
@else
<select class="custom-select w-100" id="hoposition" name="hoposition">
    <option value=""> Choose...</option>
    <option value="Human Capital Associate"> Human Capital Associate</option>
    <option value="Receptionist"> Receptionist</option>
    <option value="Purchase & Procurement Assistant"> Purchase & Procurement Assistant</option>
    <option value="Finance Assistant"> Finance Assistant</option>
    <option value="IT Manager"> IT Manager</option>
    <option value="Store Assistant"> Store Assistant</option>
    <option value="Administrative Officer"> Administrative Officer</option>
    <option value="Accounts & Finance Officer"> Accounts & Finance Officer</option>
    <option value="Admissions and Marketing Officer"> Admissions and Marketing Officer</option>
    <option value="Other"> Other</option>
</select>
@endif