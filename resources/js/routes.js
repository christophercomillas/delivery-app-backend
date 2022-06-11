import EmployeesIndex from "./components/employees/Index";
import EmployeesCreate from "./components/employees/Create";
import EmployeesEdit from "./components/employees/Edit";
import ApplicantsIndex from "./components/applicants/Index";
import ApplicantsNew from "./components/applicants/New";

export const routes = [
    {
        path: '/employees',
        name: 'EmployeesIndex',
        component:EmployeesIndex
    },
    {
        path: '/employees/create',
        name: 'EmployeesCreate',
        component:EmployeesCreate
    },
    {
        path: '/employees/:id',
        name: 'EmployeesEdit',
        component:EmployeesEdit
    },
    {
        path: '/applicants',
        name: 'ApplicantsIndex',
        component:ApplicantsIndex
    },
    {
        path: '/applicants/new',
        name: 'ApplicantsNew',
        component:ApplicantsNew
    }
];