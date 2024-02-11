export interface PaginationTypes<T> {
    current_page: number,
    data: T,
    first_page_url: string,
    last_page_url: string,
    last_page: number,
    links: PaginationLinkTypes[],
    prev_page_url: string | null,
    next_page_url: string | null,
    path: string,
    from: number,
    to: number,
    per_page: number,
    total: number
}

export interface PaginationLinkTypes {
    url: string | null;
    label: string;
    active: boolean
}