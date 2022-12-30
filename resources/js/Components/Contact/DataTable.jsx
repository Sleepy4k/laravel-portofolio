// Import Core Libraries
import { Link } from "@inertiajs/inertia-react";

// Import Bootstrap Components
import Table from "react-bootstrap/Table";

export default function DataTable({ contact }) {
    return (
        <div className="card-body">
            <div className="table-responsive">
                <Table className="table align-items-center" responsive>
                    <thead>
                        <tr className="text-center">
                            <th>{transData("table.contact.index")}</th>
                            <th>{transData("table.contact.name")}</th>
                            <th>{transData("table.contact.email")}</th>
                            <th>{transData("table.contact.message")}</th>
                            <th>{transData("table.contact.action")}</th>
                        </tr>
                    </thead>
                    <tbody>
                        {contact && contact.length > 0 ? (
                            contact.map((data, index) => {
                                return (
                                    <tr key={index} className="text-center">
                                        <td>{data.id}</td>
                                        <td>{data.name}</td>
                                        <td>{data.email}</td>
                                        <td>
                                            {data.message.length < 50
                                                ? data.message
                                                : data.message.substring(
                                                      0,
                                                      32
                                                  ) + "..."}
                                        </td>
                                        <td>
                                            <Link
                                                href={route(
                                                    "contact.show",
                                                    data.id
                                                )}
                                                as="button"
                                            >
                                                {transData(
                                                    "table.contact.show"
                                                )}
                                            </Link>
                                        </td>
                                    </tr>
                                );
                            })
                        ) : (
                            <tr>
                                <td colSpan={5} className="text-center">
                                    {transData("table.contact.empty")}
                                </td>
                            </tr>
                        )}
                    </tbody>
                </Table>
            </div>
        </div>
    );
}
