// Import Core Libraries
import { Head } from "@inertiajs/inertia-react";

// Import Layouts
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";

// Import Custom Components
import Welcome from "@/Components/Dashboard/Welcome";

export default function Dashboard(props) {
    return (
        <AuthenticatedLayout auth={props.auth} errors={props.errors}>
            <Head title="Dashboard" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <Welcome
                            user={props.auth.user}
                            php={props.phpVersion}
                            laravel={props.laravelVersion}
                        />
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
