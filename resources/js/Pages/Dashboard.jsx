// Import Core Libraries
import { Head } from "@inertiajs/inertia-react";

// Import Components
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";

export default function Dashboard(props) {
    return (
        <AuthenticatedLayout auth={props.auth} errors={props.errors}>
            <Head title="Dashboard" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6 text-gray-900 dark:text-gray-100 text-center">
                            {transData("page.dashboard.welcome")},{" "}
                            {props.auth.user.name}!
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
